<?php

namespace App\Http\Controllers;
use App\Desa;
use App\Anak;
use App\Pengurusan;
use App\User;
use App\Kecamatan;
use App\Persyaratan;
use App\Anggota;
use Illuminate\Http\Request;
use Response;
use Storage;
use Validator;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }
    public function profil()
    {
        $kecamatan=[];
        $datauser=User::where('nik', '=', \Auth::guard('web')->user()->nik)->first();
        $desa=Desa::where('id','=', $datauser->id_desa)->first();
        if($desa!=null){
            $kecamatan=Kecamatan::where('id', '=',$desa->id_kecamatan)->first();
        }
        $kecamatans=Kecamatan::all();
        return view('profil', ['datauser'=>$datauser, 'desa'=>$desa, 'kecamatan'=>$kecamatan, 'kecamatans'=>$kecamatans]);
    }
    public function showDesa(Kecamatan $kecamatan){
        $desa=\App\Desa::where('id_kecamatan','=',$kecamatan->id)->get();
        return $desa;
    }

    public function updateUser(Request $request)
    {
       User::where('nik', \Auth::guard('web')->user()->nik)->update([
            'nama'=>$request->nama,
            'jk'=>$request->jk,
            'tempat'=>$request->tempat,
            'tgl_lahir'=>$request->tgl_lahir,
            'agama'=>$request->agama,
            'alamat'=>$request->alamat,
            'gol_darah'=>$request->gol_darah,
            'status'=>$request->status,
            'id_desa'=>$request->desa
       ]);
        return redirect()->back();
    }

    public function ktp()
    {
        $kecamatan=[];
        $datauser=User::where('nik', '=', \Auth::guard('web')->user()->nik)->first();
        $desa=Desa::where('id','=', $datauser->id_desa)->first();
        if($desa!=null){
            $kecamatan=Kecamatan::where('id', '=',$desa->id_kecamatan)->first();
        }
        $persyaratan=Persyaratan::where('nik', '=', \Auth::guard('web')->user()->nik)->first();
        return view('ktp', ['datauser'=>$datauser, 'desa'=>$desa, 'kecamatan'=>$kecamatan, 'persyaratan'=>$persyaratan]);
    }

    public function submitKtp(Request $request)
    {
        $datauser=User::where('nik', '=', \Auth::guard('web')->user()->nik)->first();
        if($datauser->tempat!=null && $datauser->tgl_lahir!=null && $datauser->agama!=null && $datauser->jk!=null && $datauser->pekerjaan!=null&& $datauser->gol_darah!=null && $datauser->status!=null && $datauser->alamat!=null && $datauser->id_desa!=null){

            $persyaratan=Persyaratan::where('nik', '=', \Auth::guard('web')->user()->nik)->first();
            if($persyaratan->pengantar_ktp!=null&&$persyaratan->kk!=null&&$persyaratan->akte_kelahiran!=null){

                Pengurusan::create([
                    'nik'=>\Auth::guard('web')->user()->nik,
                    'jenis'=>'ktp'
                ]);
                return response()->json([
                    'status'=>'berhasil',
                    'message'=>'Data kamu telah tersimpan di sistem kami, silakan tunggu notifikasi untuk proses selanjutnya'
                ]);
            }

            return response()->json([
                'status'=>'gagal',
                'message'=>'Ada persyaratan yang belum kamu unggah, Silakan Lengkapi di berang Step-2'
            ]);

        }
        return response()->json([
            'status'=>'gagal',
            'message'=>'Ada data yang belum terisi, Silakan Lengkapi data di berang Step-1'
        ]);
    }

    public function upload(Request $request)
    {
        $validation=Validator::make($request->all(), [
            'select_file'=>'required|mimes:pdf'
        ]);
        if($validation->passes())
        {
            // kasih nama file
            $name=\Auth::guard('web')->user()->nik.'_'.$request->jenis.'_'.time().'.'.$request->file('select_file')->getClientOriginalExtension();
            $path=$request->file('select_file')->storeAs('public', $name);
            // upload ke database
            Persyaratan::where('nik', \Auth::guard('web')->user()->nik)->update([
                $request->jenis=>$name
            ]);
            return response()->json([
                'message'=>'yes',
                'path'=>'storage/'.$name
            ]);
        }
        else
        {
            return response()->json([
                'message'=>$validation->errors()->all()
            ]);
        }
    }

    public function kk()
    {
        $anggota_keluarga=Anggota::where('nik_kepala_keluarga', '=', \Auth::guard('web')->user()->nik)->get();
        $persyaratan=Persyaratan::where('nik', '=', \Auth::guard('web')->user()->nik)->first();
        return view('kk', ['anggota'=>$anggota_keluarga, 'persyaratan'=>$persyaratan]);
    }

    public function submitkk()
    {
        $datauser=User::where('nik', '=', \Auth::guard('web')->user()->nik)->first();
        if($datauser->tempat!=null && $datauser->tgl_lahir!=null && $datauser->agama!=null && $datauser->jk!=null && $datauser->pekerjaan!=null&& $datauser->gol_darah!=null && $datauser->status!=null && $datauser->alamat!=null && $datauser->id_desa!=null){

            $persyaratan=Persyaratan::where('nik', '=', \Auth::guard('web')->user()->nik)->first();
            if($persyaratan->pengantar_kk!=null&&$persyaratan->surat_nikah!=null){

                Pengurusan::create([
                    'nik'=>\Auth::guard('web')->user()->nik,
                    'jenis'=>'kk'
                ]);
                return response()->json([
                    'status'=>'berhasil',
                    'message'=>'Data kamu telah tersimpan di sistem kami, silakan tunggu notifikasi untuk proses selanjutnya'
                ]);
            }

            return response()->json([
                'status'=>'gagal',
                'message'=>'Ada persyaratan yang belum kamu unggah, Silakan Lengkapi di berang Step-2'
            ]);

        }
        return response()->json([
            'status'=>'gagal',
            'message'=>'Data diri anda belum lengkap, Silakan Lengkapi data menu profil'
        ]);
    }


    public function tambahAnggota(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'tempat' => 'required',
            'tgl_lahir' => 'required',
            'jk' => 'required',
            'agama' => 'required',
            'gol_darah' => 'required',
            'ayah' => 'required',
            'ibu' => 'required',
            'pendidikan' => 'required',
            'pekerjaan' => 'required',
            'hubungan' => 'required',
            'status' => 'required',
        ]);
        
        Anggota::create([
            'nik_kepala_keluarga'=>\Auth::guard('web')->user()->nik,
            'nama'=>$request->nama,
            'tempat'=>$request->tempat,
            'tgl_lahir'=>$request->tgl_lahir,
            'nama_ayah'=>$request->ayah,
            'nama_ibu'=>$request->ibu,
            'jk'=>$request->jk,
            'agama'=>$request->agama,
            'gol_darah'=>$request->gol_darah,
            'pekerjaan'=>$request->pekerjaan,
            'pendidikan'=>$request->pendidikan,
            'hubungan_keluarga'=>$request->hubungan,
            'status'=>$request->status,
        ]);
        return redirect()->back();
    }

    public function deleteAnggota(Anggota $anggota)
    {
        Anggota::destroy($anggota->id);
        return redirect()->back();
    }

    public function submitAkte(Request $request)
    {
        $validation=Validator::make($request->all(), [
            'nama'=>'required',
            'tempat'=>'required',
            'tgl_lahir'=>'required',
            'ayah'=>'required',
            'ibu'=>'required',
            'jk'=>'required',
            'anakke'=>'required|integer',
        ]);
        if($validation->passes()){

            $persyaratan=Persyaratan::where('nik', '=', \Auth::guard('web')->user()->nik)->first();
            if($persyaratan->skk_bidan!=null&&$persyaratan->surat_nikah!=null&&$persyaratan->skk_kelurahan!=null){
                $data=Anak::create($request->all());
                Pengurusan::create([
                    'nik'=>\Auth::guard('web')->user()->nik,
                    'jenis'=>'akte',
                    'data'=>$data->id
                ]);
                return response()->json([
                    'status'=>'berhasil',
                    'message'=>'Data kamu telah tersimpan di sistem kami, silakan tunggu notifikasi untuk proses selanjutnya'
                ]);
            }
            return response()->json([
                'status'=>'gagal',
                'message'=>'Ada persyaratan yang belum kamu unggah, Silakan Lengkapi di berang Step-2'
            ]);
        }
        return response()->json([
            'status'=>'gagal',
            'message'=>$validation->errors()->first()
        ]);
    }

    public function akte()
    {
        $persyaratan=Persyaratan::where('nik', '=', \Auth::guard('web')->user()->nik)->first();
        return view('akte',['persyaratan'=> $persyaratan]);
    }

}
