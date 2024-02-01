<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function index()
    {
        $users = DB::table('master_users')->get();
        // dd($users);
        return view('master-users.users', compact('users'));
    }

    public function addUsers(){
        return view('master-users.add-users');

    }

    public function input(Request $request)
    {
        // return $request;
        DB::table('master_users')->insert([
            'username' => $request->username,
            'email' => $request->email,
            'nama' => $request->nama,
            'password' => Hash::make($request['password']),
            'role' => $request->role,
            'status' => $request->status,


        ]);
        return redirect('/master-users.users')->with('success', 'Berhasil menambahkan User.');
    }

    public function edit($id)
    {
        $users = DB::table('master_users')->where('id', $id)->get();

        return view('/master-users.detail-users', ['users' => $users[0]]);
    }

    public function update(Request $request)
    {
        // return $request;
        DB::table('master_users')->where('id', $request->id)->update([
            'username' => $request->username,
            'email' => $request->email,
            'nama' => $request->nama,
            'password' => Hash::make($request['password']),
            'role' => $request->role,
            'status' => $request->status,
        ]);
        return redirect('/master-users.users')->with('success', 'Berhasil edit User.');
    }

    public function delete($id)
    {
        DB::table('master_users')->where('id', $id)->delete();
        return redirect('/master-users.users')->with('success', 'Berhasil hapus User.');
    }
}
