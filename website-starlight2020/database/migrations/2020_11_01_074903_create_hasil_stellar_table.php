<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHasilStellarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasil_stellar', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ip_address')->unique();
            $table->integer('peserta_stellar_id')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('peserta_stellar_id')->references('id')->on('peserta_stellar')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hasil_stellar');
    }
}
