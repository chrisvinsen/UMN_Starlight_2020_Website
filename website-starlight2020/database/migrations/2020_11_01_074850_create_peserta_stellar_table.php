<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesertaStellarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peserta_stellar', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('images');
            $table->string('images_hover');
            $table->timestamps();
            $table->softDeletes();
        });

        DB::table('peserta_stellar')->insert([
            [
                'name'         => 'peserta1',
                'images'       => 'images/voting-stellar/peserta1.png',
                'images_hover' => 'images/voting-stellar/peserta1_hover.png',
            ],
            [
                'name'         => 'peserta2',
                'images'       => 'images/voting-stellar/peserta2.png',
                'images_hover' => 'images/voting-stellar/peserta2_hover.png',
            ],
            [
                'name'         => 'peserta3',
                'images'       => 'images/voting-stellar/peserta3.png',
                'images_hover' => 'images/voting-stellar/peserta3_hover.png',
            ],
            [
                'name'         => 'peserta4',
                'images'       => 'images/voting-stellar/peserta4.png',
                'images_hover' => 'images/voting-stellar/peserta4_hover.png',
            ],
            [
                'name'         => 'peserta5',
                'images'       => 'images/voting-stellar/peserta5.png',
                'images_hover' => 'images/voting-stellar/peserta5_hover.png',
            ],
            [
                'name'         => 'peserta6',
                'images'       => 'images/voting-stellar/peserta6.png',
                'images_hover' => 'images/voting-stellar/peserta6_hover.png',
            ],
            [
                'name'         => 'peserta7',
                'images'       => 'images/voting-stellar/peserta7.png',
                'images_hover' => 'images/voting-stellar/peserta7_hover.png',
            ],
            [
                'name'         => 'peserta8',
                'images'       => 'images/voting-stellar/peserta8.png',
                'images_hover' => 'images/voting-stellar/peserta8_hover.png',
            ],
            [
                'name'         => 'peserta9',
                'images'       => 'images/voting-stellar/peserta9.png',
                'images_hover' => 'images/voting-stellar/peserta9_hover.png',
            ],
            [
                'name'         => 'peserta10',
                'images'       => 'images/voting-stellar/peserta10.png',
                'images_hover' => 'images/voting-stellar/peserta10_hover.png',
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peserta_stellar');
    }
}
