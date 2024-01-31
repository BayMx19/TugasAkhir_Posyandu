<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PencatatanController extends Controller
{
    public function index()
    {
        return view('home');
    }
}