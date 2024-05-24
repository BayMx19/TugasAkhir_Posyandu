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

            
            

        // dd($countAnak);
        // return view('dashboard', compact('getcountAnak', 'getcountKaders', 'getcountStunting', 'getcountWasting', 'getcountUnderweight'));

        return [
        'getcountAnak' => $getcountAnak,
        'getcountKaders' => $getcountKaders,
        'getcountStunting' => $getcountStunting,
        'getcountWasting' => $getcountWasting,
        'getcountUnderweight' => $getcountUnderweight,
    ];
    }

    public function getcountchart(){
        $datachart = DB::table('pencatatan')->select(
                DB::raw('EXTRACT(MONTH FROM tgl_catat) as bulan'),
                DB::raw('SUM(CASE WHEN p_stunting = \'Stunting\' THEN 1 ELSE 0 END) as p_stunting'), 
                DB::raw('SUM(CASE WHEN p_wasting = \'Wasting\' THEN 1 ELSE 0 END) as p_wasting'), 
                DB::raw('SUM(CASE WHEN p_underweight = \'Underweight\' THEN 1 ELSE 0 END) as p_underweight'),
            )
            ->groupBy(DB::raw('EXTRACT(MONTH FROM tgl_catat)'))
            ->get();

            $months = array_fill(1, 12, ['p_stunting' => 0, 'p_wasting' => 0, 'p_underweight' => 0]);

    // Populate the array with actual data
    foreach ($datachart as $data) {
        $months[$data->bulan] = [
            'p_stunting' => $data->p_stunting,
            'p_wasting' => $data->p_wasting,
            'p_underweight' => $data->p_underweight,
        ];
    }

            $counts = $this->getcount();

    return view('dashboard', array_merge($counts, ['datachart' => $months]));
    }
    

}