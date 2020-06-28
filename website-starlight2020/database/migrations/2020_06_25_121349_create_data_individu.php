<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataIndividu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_individu', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fullname', 50);
            $table->date('birthdate');
            $table->string('address', 100);
            $table->string('school', 30);
            $table->string('phonenumber', 20)->unique();
            $table->string('line', 30)->unique();
            $table->string('ktp')->nullable();
            $table->string('studentid');
            $table->string('stagename');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('stagename')->references('stagename')->on('data_umum')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_individu');
    }
}
