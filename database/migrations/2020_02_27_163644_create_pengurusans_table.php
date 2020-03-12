<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengurusansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengurusans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nik');
            $table->string('jenis');
            $table->integer('data')->nullable();
            $table->sting('status')->nullable();
            $table->date('ambil')->nullable();
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
        Schema::dropIfExists('pengurusans');
    }
}
