<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersyaratansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persyaratans', function (Blueprint $table) {
            $table->string('nik')->unique();
            $table->string('pengantar_ktp')->nullable();
            $table->string('kk')->nullable();
            $table->string('akte_kelahiran')->nullable();
            $table->string('skk_kelurahan')->nullable();
            $table->string('skk_bidan')->nullable();
            $table->string('surat_nikah')->nullable();
            $table->string('pengantar_kk')->nullable();
            $table->string('surat_pindah')->nullable();
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
        Schema::dropIfExists('persyaratans');
    }
}
