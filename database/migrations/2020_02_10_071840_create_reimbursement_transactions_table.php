<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReimbursementTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reimbursement_transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('transaction_ids');
            $table->string('description')->nullable();
            $table->string('type');
            $table->bigInteger('reimbursement_id');
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
        Schema::dropIfExists('reimbursement_transactions');
    }
}
