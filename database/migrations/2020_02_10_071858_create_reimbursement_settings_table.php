<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReimbursementSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reimbursement_settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('reimbursement_id');
            $table->boolean('set_default')->default(0)->nullable();
            $table->boolean('emerge_at_join')->default(0)->nullable();
            $table->boolean('mandatory_upload_file')->default(0)->nullable();
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
        Schema::dropIfExists('reimbursement_settings');
    }
}
