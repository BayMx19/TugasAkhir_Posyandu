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

        // dd($countAnak);
        return view('dashboard', compact('getcountAnak', 'getcountKaders'));
    }
}