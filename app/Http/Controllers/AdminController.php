<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Pengurusan;
use App\Operator;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $user=User::all();
        $ktp=Pengurusan::where('jenis','=','ktp')->get();
        $kk=Pengurusan::where('jenis','=','kk')->get();
        $akte=Pengurusan::where('jenis','=','akte')->get();
        return view('admin.dashboard', ['ktp'=>$ktp, 'kk'=>$kk, 'akte'=>$akte, 'user'=>$user]);
    }

    public function operator()
    {
        $operator=Operator::all();
        return view('admin.operator', ['operator'=> $operator]);
    }

    public function tambahOperator(Request $request)
    {
        $request->validate([
            'nama'=>'required|min:5',
            'username'=>'required|min:5',
            'password'=>'required|min:6',
        ]);
        Operator::create([
            'nama'=>$request->nama,
            'username'=>$request->username,
            'password'=>bcrypt($request->password)
        ]);
        return redirect()->back();
    }

    public function deleteOperator(Operator $operator)
    {
        Operator::destroy($operator->id);
        return redirect()->back();
    }

    public function ktp()
    {
        $pengurusan=Pengurusan::where('jenis', '=', 'ktp')->get();
        return view('admin.pengurusan', ['pengurusan'=>$pengurusan]);
    }
    public function kk()
    {
        $pengurusan=Pengurusan::where('jenis', '=', 'kk')->get();
        return view('admin.pengurusan', ['pengurusan'=>$pengurusan]);
    }
    public function akte()
    {
        $pengurusan=Pengurusan::where('jenis', '=', 'akte')->get();
        return view('admin.pengurusan', ['pengurusan'=>$pengurusan]);
    }
}
