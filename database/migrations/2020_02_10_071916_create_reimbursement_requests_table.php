<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReimbursementRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reimbursement_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('transaction');
            $table->unsignedInteger('user_id');
            $table->date('effective_date');
            $table->string('description')->nullable();
            $table->bigInteger('reimbursement_id');
            $table->text('file_upload')->nullable();
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('reimbursement_requests');
    }
}
