<?php

namespace App\Http\Controllers\Reimbursement;

use App\Http\Controllers\Controller;
use App\Models\Reimbursement\Reimbursement;
use App\Models\Reimbursement\ReimbursementTransactionDetail;
use App\Models\Reimbursement\ReimbursementTransactions;
use App\User;
use Illuminate\Http\Request;

class ReimbursementTransactionController extends Controller
{
    public function index($ajax = false)
    {
        $reimbursementTransactions = ReimbursementTransactions::all();
        $reimbursements            = Reimbursement::all()->pluck('name', 'id');
        if ($ajax === true) {
            return view('reimbursement.reimbursement-transactions.list', compact('reimbursementTransactions', 'reimbursements'));
        }
        return view('reimbursement.reimbursement-transactions.index', compact('reimbursementTransactions', 'reimbursements'));
    }

    public function store(Request $request)
    {
        ReimbursementTransactions::create($request->all());

        return $this->index(true);
    }

//    public function update(UpdateReimbursementTransactionRequest $request, ReimbursementTransaction $reimbursementTransaction)
//    {
//        $reimbursementTransaction->update($request->all());
//
//        return redirect()->route('admin.reimbursement-transactions.index');
//    }

    public function show(ReimbursementTransactions $reimbursementTransaction, $ajax = false)
    {
        $reimbursementTransaction->load('reimbursement');
        $employee = User::all()->pluck('name', 'id');

        if ($ajax === true) {
            return view('reimbursement.reimbursement-transactions.detail.list', compact('reimbursementTransaction', 'employee'));
        }

        return view('reimbursement.reimbursement-transactions.detail.index', compact('reimbursementTransaction', 'employee'));
    }

    public function destroy(ReimbursementTransactions $reimbursementTransaction)
    {
        $reimbursementTransaction->delete();

        return back();
    }

    public function saveDetail($id, Request $request)
    {
        $reimbursement                                           = ReimbursementTransactions::find($id);
        $reimbursementTransaction                                = new ReimbursementTransactionDetail();
        $reimbursementTransaction->user_id                       = $request->user_id;
        $reimbursementTransaction->reimbursement_transactions_id = $reimbursement->id;
        $reimbursementTransaction->save();
        return $this->show($reimbursement, true);
    }

    public function updateDetail($id, $detailId, Request $request)
    {
        $reimbursement             = ReimbursementTransactionDetail::find($detailId);
        $reimbursement->balance    = $request->balance;
        $reimbursement->start_date = $request->start_date;
        $reimbursement->end_date   = $request->end_date;
        $reimbursement->save();
        return $this->show($reimbursement, true);
    }

    public function destroyDetail($id)
    {
        ReimbursementTransactionDetail::where('id', $id)->delete();

        return back();
    }

}
