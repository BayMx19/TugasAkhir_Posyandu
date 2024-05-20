<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        return view('dashboard');
    }

    // public function getcountKaders() {
    //     $getcountKaders = DB::table('master_kader')->get()->count();
    //     dd($getcountKaders);
    //     return view('dashboard', compact('getcountKaders'));
    // }

    public function getcount() {
             $getcountAnak = DB::table('master_anak')->get()->count();
            $getcountKaders = DB::table('master_kader')->get()->count();
            $getcountStunting = DB::table('pencatatan')->where('p_stunting', 'Stunting')->get()->count();
            $getcountWasting = DB::table('pencatatan')->where('p_wasting', 'Wasting')->get()->count();
            $getcountUnderweight = DB::table('pencatatan')->where('p_underweight', 'Underweight')->get()->count();

            $getGraph = DB::table('pencatatan')->get()->count();

        // dd($countAnak);
        return view('dashboard', compact('getcountAnak', 'getcountKaders', 'getcountStunting', 'getcountWasting', 'getcountUnderweight'));
    }

    public function getDataForChart()
{
    $data = DB::table('pencatatan')
            ->select(DB::raw('MONTH(tgl_catat) as bulan'), 
                     DB::raw('SUM(p_stunting) as p_stunting'), 
                     DB::raw('SUM(p_wasting) as p_wasting'), 
                     DB::raw('SUM(p_underweight) as p_underweight'))
            ->groupBy(DB::raw('MONTH(tgl_catat)'))
            ->orderBy(DB::raw('MONTH(tgl_catat)'))
            ->get();

            dd($data);
            
    return response()->json($data);
}
}