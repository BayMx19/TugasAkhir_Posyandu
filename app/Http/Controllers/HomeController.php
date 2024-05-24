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

    $genderData = DB::table('master_anak')->select(
        DB::raw('jk as gender'),
        DB::raw('COUNT(*) as count')
    )
    ->groupBy('jk')
    ->get();

    // dd($genderData);

    $genderCounts = [
        'Laki-Laki' => 0,
        'Perempuan' => 0
    ];

    foreach ($genderData as $data) {
        $genderCounts[$data->gender] = $data->count;
    }


    
    $kondisiData = DB::table('master_anak')->select(
        DB::raw('kondisi as kondisi'),
        DB::raw('COUNT(*) as count')
    )
    ->groupBy('kondisi')
    ->get();

    
    $kondisiCounts = [
        'hidup' => 0,
        'meninggal' => 0
    ];

    

    foreach ($kondisiData as $data) {
        $kondisiCounts[$data->kondisi] = $data->count;
    }

    $p_stuntingData = DB::table('pencatatan')->select(
        DB::raw('p_stunting as p_stunting'),
        DB::raw('COUNT(*) as count')
    )
    ->groupBy('p_stunting')
    ->get();

    
    $p_stuntingCounts = [
        'Stunting' => 0,
        'Tidak Stunting' => 0
    ];

    

    

    foreach ($p_stuntingData as $data) {
        $p_stuntingCounts[$data->p_stunting] = $data->count;
    }

    $p_wastingData = DB::table('pencatatan')->select(
        DB::raw('p_wasting as p_wasting'),
        DB::raw('COUNT(*) as count')
    )
    ->groupBy('p_wasting')
    ->get();

    
    $p_wastingCounts = [
        'Stunting' => 0,
        'Tidak Stunting' => 0
    ];



    

    foreach ($p_wastingData as $data) {
        $p_wastingCounts[$data->p_wasting] = $data->count;
    }

    $p_underweightData = DB::table('pencatatan')->select(
        DB::raw('p_underweight as p_underweight'),
        DB::raw('COUNT(*) as count')
    )
    ->groupBy('p_underweight')
    ->get();

    
    $p_underweightCounts = [
        'Stunting' => 0,
        'Tidak Stunting' => 0
    ];

 

    

    foreach ($p_underweightData as $data) {
        $p_underweightCounts[$data->p_underweight] = $data->count;
    }

    
    
    
            $counts = $this->getcount();

            // dd($kondisiCounts);

    return view('dashboard', array_merge($counts, ['datachart' => $months, 'genderCounts' => $genderCounts, 'kondisiCounts' => $kondisiCounts, 'p_stuntingCounts' => $p_stuntingCounts, 'p_wastingCounts' => $p_wastingCounts, 'p_underweightCounts' => $p_underweightCounts]));
    }
    

}