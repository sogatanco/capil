<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama', 100);
            $table->string('nik')->unique();
            $table->string('password');
            $table->string('tempat',100)->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->char('agama',20)->nullable();
            $table->char('jk',10)->nullable();
            $table->string('pekerjaan',50)->nullable();
            $table->string('gol_darah',3)->nullable();
            $table->string('status',20)->nullable();
            $table->string('alamat',150)->nullable();
            $table->char('id_desa',3)->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
