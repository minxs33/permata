<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\Agen;
use App\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function daftaragen()
    {
        if(Auth()->user()->status == 'user'){
        return view('agen/daftaragen');
        }else{
        return view('/home')->with(['danger'=>'Permintaan sedang di proses']);
        }
    }
    public function daftarsukses()
    {
        $agen = Agen::where('id_user',Auth()->user()->id_user)->first();
        return view('agen/daftarsukses',[
            'agen' => $agen
        ]);
    }
}
