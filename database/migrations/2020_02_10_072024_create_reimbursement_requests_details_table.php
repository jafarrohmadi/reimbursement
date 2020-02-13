<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReimbursementRequestsDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reimbursement_requests_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('reimbursement_id');
            $table->string('name');
            $table->integer('requestAmount');
            $table->integer('paidAmount')->nullable();
            $table->text('description');
            $table->unsignedInteger('reimbursement_request_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reimbursement_requests_details');
    }
}
