<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataUmum extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_umum', function (Blueprint $table) {
            $table->increments('id');
            $table->string('stagename', 50)->unique();
            $table->integer('membersvalue')->default(1);
            $table->string('email', 50)->unique();
            $table->string('line', 30);
            $table->string('phonenumber', 20);
            $table->string('instagram', 30);
            $table->text('stagedescription');
            $table->string('payment')->nullable();
            $table->string('payment_name', 50)->nullable();
            $table->string('payment_bank', 50)->nullable();
            $table->string('payment_number', 20)->nullable();
            $table->string('token', 10)->unique();
            $table->string('stage');
            $table->string('status');
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
        Schema::dropIfExists('data_umum');
    }
}
