<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnggotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggotas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nik_kepala_keluarga');
            $table->string('nama');
            $table->string('tempat');
            $table->date('tgl_lahir');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('jk');
            $table->string('agama');
            $table->string('gol_darah');
            $table->string('pendidikan');
            $table->string('pekerjaan');
            $table->string('hubungan_keluarga');
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
        Schema::dropIfExists('anggotas');
    }
}
