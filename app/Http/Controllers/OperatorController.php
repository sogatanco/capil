<?php

namespace App\Http\Controllers;

use App\Pengurusan;
use App\User;
use Illuminate\Http\Request;

class OperatorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:operator');
    }

    public function index()
    {   
        $user=User::all();
        $ktp=Pengurusan::where('jenis','=','ktp')->get();
        $kk=Pengurusan::where('jenis','=','kk')->get();
        $akte=Pengurusan::where('jenis','=','akte')->get();
        return view('operator.dashboard', ['ktp'=>$ktp, 'kk'=>$kk, 'akte'=>$akte, 'user'=>$user]);
    }

   public function reviewKtp()
    {
        // Sort by created_at
        $ktp=Pengurusan::where('jenis','=','ktp')->where('status','=',NULL)->orderBy('created_at', 'asc')->get();
        
        // antrian pertama
        $ktp_antrian_1=$ktp->first();

        // sisa antrian
        $ktp_sisa=$ktp->slice(1);

        return view('operator.review', ['antrian_1'=>$ktp_antrian_1, 'sisa_antrian'=>$ktp_sisa, 'title'=>'KTP']);
    }

   public function reviewKk()
    {
        // Sort by created_at
        $ktp=Pengurusan::where('jenis','=','kk')->where('status','=',NULL)->orderBy('created_at', 'asc')->get();
        
        // antrian pertama
        $ktp_antrian_1=$ktp->first();

        // sisa antrian
        $ktp_sisa=$ktp->slice(1);

        return view('operator.review', ['antrian_1'=>$ktp_antrian_1, 'sisa_antrian'=>$ktp_sisa, 'title'=>'Kartu Keluarga']);
    }

   public function reviewAkte()
    {
        // Sort by created_at
        $ktp=Pengurusan::where('jenis','=','akte')->where('status','=',NULL)->orderBy('created_at', 'asc')->get();
        
        // antrian pertama
        $ktp_antrian_1=$ktp->first();

        // sisa antrian
        $ktp_sisa=$ktp->slice(1);

        return view('operator.review', ['antrian_1'=>$ktp_antrian_1, 'sisa_antrian'=>$ktp_sisa, 'title'=>'Kartu Keluarga']);
    }

    public function reject(Request $request)
    {
        Pengurusan::where('id',$request->id)->update([
            'status'=>'rejected'
        ]);

        return redirect()->back();
    }

    public function approve(Request $request)
    {
        $tgl_approve=strtotime(date('M d, Y'));
        // menentukan tgl selesai
        $tgl_selesai = strtotime('+7 day', $tgl_approve);
        // jika jatuh pada hari libur kerja maka akan diundur ke hari kerja
        if(date('l',$tgl_selesai)=='Saturday'){
            $tgl_selesai = strtotime('+2 day', $tgl_selesai);
        }else if(date('l',$tgl_selesai)=='Sunday'){
            $tgl_selesai = strtotime('+1 day', $tgl_selesai);
        }
        Pengurusan::where('id',$request->id)->update([
            'status'=>'approved',
            'ambil'=>date('Y-m-d', $tgl_selesai)
        ]);

        return redirect()->back();
    }

    public function proKtp()
    {
        $process= Pengurusan::where('jenis','=','ktp')->where('status','!=', NULL)->where('status','!=','finished')->get();
        return view('operator.process', ['process'=>$process, 'title'=>'KTP']);
    }

    public function proKk()
    {
        $process= Pengurusan::where('jenis','=','kk')->where('status','!=', NULL)->where('status','!=','finished')->get();
        return view('operator.process', ['process'=>$process, 'title'=>'Kartu Keluarga']);
    }

    public function proAkte()
    {
        $process= Pengurusan::where('jenis','=','akte')->where('status','!=', NULL)->where('status','!=','finished')->get();
        return view('operator.process', ['process'=>$process, 'title'=>'Akte Kelahiran']);
    }

    public function finish(Request $request)
    {
        Pengurusan::where('id',$request->id)->update([
            'status'=>'finished'
        ]);
        return redirect()->back();
    }

}
