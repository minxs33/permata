<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Agen;
use Auth;
use DB;

class AgenController extends Controller
{
    public function dashboard()
    { 
        $agen = Agen::where('id_agen',Auth()->user()->id_user)->first();
        return view('agen/dashboard/beranda',[
            'agen' => $agen
        ]);
    }
    public function insert(request $request)
    {
        $this->validate($request, [

            'nama_lengkap' => 'required',
            'nik' => 'required',
            'jenis_kelamin' => 'required',
            'ttl' => 'required',
            'alamat' => 'required',
            'pekerjaan' => 'required',
            'foto_ktp.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'no_rekening' => 'required',
            'pin_rekening' => 'required',

        ]);
        $insert = new User;
        $insert1 = new Agen;
        $insert = User::find(Auth::user()->id_user);
        if($insert->status == 'user')
        {
            $insert->id_user = Auth::user()->id_user;
            $insert->status = 'menunggu';
            $insert->save();
        
            $insert1->id_user = Auth::user()->id_user;
            $insert1->nama_lengkap = $request->nama_lengkap;
            $insert1->nik = $request->nik;
            $insert1->jenis_kelamin = $request->jenis_kelamin;
            $insert1->ttl = $request->ttl;
            $insert1->alamat = $request->alamat;
            $insert1->agama = $request->agama;
            $insert1->pekerjaan = $request->pekerjaan;

            if($request->hasfile('foto_ktp')){

                $foto_ktp = $request->foto_ktp;
                $filename = time() . '.' . $foto_ktp->getClientOriginalExtension();
                request()->foto_ktp->move(public_path('fotoktp'), $filename);
                $insert1->foto_ktp = $filename;
            }else{
                $insert1->foto_ktp = 'tidak ada';
            }
        $insert1->no_rekening = $request->no_rekening;
        $insert1->pin_rekening = $request->pin_rekening;
        $insert1->save();
        return redirect('agen/daftarsukses')->with(['success'=>'Permintaan kamu sedang di proses']);
        }
    }
}