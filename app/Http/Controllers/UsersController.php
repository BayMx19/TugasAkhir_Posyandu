<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function index()
    {
        $users = DB::table('master_users')->get();
        // dd($users);
        return view('master-users.users', compact('users'));
    }
}
