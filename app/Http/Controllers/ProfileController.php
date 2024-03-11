<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function index()
    {
        $id = Auth::user()->id;
        $profile = DB::table('master_users')->where('id', $id)->first();
        // dd($profile);
        return view('profile', compact('profile'));
    }
}
