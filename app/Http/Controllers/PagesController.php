<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengurusan;
use App\Persyaratan;
use App\User;
use App\Anggota;
use App\Anak;

class PagesController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function pengurusan()
    {
        return Pengurusan::all();
    }

    public function detailpengurusan(Pengurusan $pengurusan)
    {
        return $pengurusan;
    }

    public function persyaratan($nik)
    {
        return Persyaratan::where('nik', '=', $nik)->first();
    }

    public function user($nik)
    {
        return User::where('nik','=', $nik)->first();
    }

    public function anggota($nik)
    {
        return Anggota::where('nik_kepala_keluarga','=', $nik)->get();
    }

    public function anak(Anak $anak)
    {
        return $anak;
    }
}
