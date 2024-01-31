<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class KaderController extends Controller
{
    public function index()
    {
        $kader = DB::table('master_kader')->get();

        return view('master-kader.kader', compact('kader'));
    }
}