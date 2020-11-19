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
                'name'         => 'Coorly Bones',
                'images'       => 'images/voting-stellar/CoorlyBones.png',
                'images_hover' => 'images/voting-stellar/CoorlyBones_hover.png',
            ],
            [
                'name'         => 'Aaron Nathanael',
                'images'       => 'images/voting-stellar/AaronNathanael.png',
                'images_hover' => 'images/voting-stellar/AaronNathanael_hover.png',
            ],
            [
                'name'         => 'Grace Felni',
                'images'       => 'images/voting-stellar/GraceFelni.png',
                'images_hover' => 'images/voting-stellar/GraceFelni_hover.png',
            ],
            [
                'name'         => '27',
                'images'       => 'images/voting-stellar/27.png',
                'images_hover' => 'images/voting-stellar/27_hover.png',
            ],
            [
                'name'         => 'Ellen Viola',
                'images'       => 'images/voting-stellar/EllenViola.png',
                'images_hover' => 'images/voting-stellar/EllenViola_hover.png',
            ],
            [
                'name'         => 'Fadly Ali',
                'images'       => 'images/voting-stellar/FadlyAli.png',
                'images_hover' => 'images/voting-stellar/FadlyAli_hover.png',
            ],
            [
                'name'         => 'Motova',
                'images'       => 'images/voting-stellar/Motova.png',
                'images_hover' => 'images/voting-stellar/Motova_hover.png',
            ],
            [
                'name'         => 'Helen',
                'images'       => 'images/voting-stellar/Helen.png',
                'images_hover' => 'images/voting-stellar/Helen_hover.png',
            ],
            [
                'name'         => 'FACE-OFF',
                'images'       => 'images/voting-stellar/FACE-OFF.png',
                'images_hover' => 'images/voting-stellar/FACE-OFF_hover.png',
            ],
            [
                'name'         => 'Jenaziela',
                'images'       => 'images/voting-stellar/Jenaziela.png',
                'images_hover' => 'images/voting-stellar/Jenaziela_hover.png',
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
