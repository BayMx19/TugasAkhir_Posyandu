<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AnakController extends Controller
{
    public function index()
    {
        $anak = DB::table('master_anak')->get();

        return view('master-anak.anak', compact('anak'));
    }
}