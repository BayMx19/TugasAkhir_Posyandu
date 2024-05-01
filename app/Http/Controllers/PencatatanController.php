<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PencatatanController extends Controller
{
    public function index()
    {
        $pencatatan = DB::table('pencatatan')->get();

        return view('pencatatan.perkembangan', compact('pencatatan'));
    }
    
    public function addPencatatan(){
        // dd($users);
        return view('pencatatan.add-perkembangan');

    }

}