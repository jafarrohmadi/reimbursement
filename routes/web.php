<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['namespace'=> 'Reimbursement', 'middleware' => ['auth']], function () {
    //Reimbursement
    Route::resource('reimbursements', 'ReimbursementController');

    //Reimbursement Settings
    Route::resource('reimbursements-settings', 'ReimbursementSettingsController');

    // Reimbursement Requests
    Route::post('reimbursement-requests/{id}/saveDetail', 'ReimbursementRequestController@saveDetail')->name('reimbursement-requests.saveDetail');
    Route::delete('reimbursement-requests/{id}/destroyDetail/{detailId}', 'ReimbursementRequestController@destroyDetail')->name('reimbursement-requests.destroyDetail');
    Route::post('reimbursement-requests/{id}/saveDetail', 'ReimbursementRequestController@saveDetail')->name('reimbursement-requests.saveDetail');

    Route::put('reimbursement-requests/{id}/approve', 'ReimbursementRequestController@approve')->name('reimbursement-requests.approve');
    Route::resource('reimbursement-requests', 'ReimbursementRequestController');

    // Reimbursement Transactions
    Route::get('reimbursement-transactions/{id}/editDetail/{detailId}', 'ReimbursementTransactionController@editDetail')->name('reimbursement-transactions.editDetail');
    Route::put('reimbursement-transactions/{id}/updateDetail/{detailId}', 'ReimbursementTransactionController@updateDetail')->name('reimbursement-transactions.updateDetail');

    Route::post('reimbursement-transactions/{id}/saveDetail', 'ReimbursementTransactionController@saveDetail')->name('reimbursement-transactions.saveDetail');
    Route::delete('reimbursement-transactions/{id}/destroyDetail', 'ReimbursementTransactionController@destroyDetail')->name('reimbursement-transactions.destroyDetail');
    Route::delete('reimbursement-transactions/destroy', 'ReimbursementTransactionController@massDestroy')->name('reimbursement-transactions.massDestroy');
    Route::resource('reimbursement-transactions', 'ReimbursementTransactionController');
});
