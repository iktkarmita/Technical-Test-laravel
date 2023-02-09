<?php

namespace App\Http\Controllers;

use App\Models\dataprovinsi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataprovinsiController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $provinsi  = DB::table('reg_provinces')->select('name')->take(25)->get();
        $districts  = DB::table('reg_districts')->select('name')->take(25)->get(); //kecamatan
        $city  = DB::table('reg_regencies')->select('name')->take(25)->get(); //kabupaten/kota
        $villages = DB::table('reg_villages')->select('name')->take(25)->get(); //kelurahan

        return view('index', compact(['provinsi', 'city', 'districts', 'villages']));
    }
}
