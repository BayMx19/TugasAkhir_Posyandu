<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;
use Illuminate\Database\QueryException;
use App\Models\MasterUsers;
use Illuminate\Support\Facades\Log;
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
        try {
            DB::table('master_users')->insert([
                'username' => $request->username,
                'email' => $request->email,
                'nama' => $request->nama,
                'password' => Hash::make($request['password']),
                'role' => $request->role,
                'status' => $request->status,
                'created_at' => Carbon::now(),
            ]);

            return redirect('/master_users')->with('success', 'Berhasil menambahkan User.');
        } catch (QueryException $e) {
            return redirect('/master_users')->with('error', 'Gagal menambahkan User: Coba Lagi' );
        }
    }
    public function detail($id)
    {
        $decryptedId = decrypt($id);
        $user = MasterUsers::find($decryptedId);
        // dd($user);

        if (!$user) {
            return abort(404);
        }

        return view('master-users.detail-users', compact('user'));
    }
    public function edit($id)
    {
        try {
        $decryptedId = decrypt($id);
        $user = MasterUsers::find($decryptedId);
        if (!$user) {
            return abort(404);
        }

        return view('master-users.edit-users', compact('user'));
        } catch (\Illuminate\Contracts\Encryption\DecryptException $e) {
            Log::error('Decryption error: ' . $e->getMessage());
            return abort(500, 'Error: Unable to decrypt the ID.');
        }

    }

    public function update(Request $request, $id)
    {
        try {
        // return $request;
        $decryptedId = decrypt($id);
        $user = MasterUsers::find($decryptedId);

        if (!$user) {
            return abort(404);
        }
        DB::table('master_users')->where('id', $decryptedId)->update([
            'username' => $request->username,
            'email' => $request->email,
            'nama' => $request->nama,
            'password' => Hash::make($request['password']),
            'role' => $request->role,
            'status' => $request->status,
            'updated_at' => Carbon::now(),
        ]);
        return redirect('/master_users')->with('success', 'Berhasil edit User.');
        } catch (\Illuminate\Contracts\Encryption\DecryptException $e) {
            return abort(500, 'Error: Unable to decrypt the ID.');
        }
    }

    public function delete($id)
    {
        try {
            $decryptedId = decrypt($id);
            DB::table('master_users')->where('id', $decryptedId)->delete();
            return redirect('/master_users')->with('success', 'Berhasil hapus User.');
        } catch (QueryException $e) {
            return redirect('/master_users')->with('error', 'Gagal hapus User: ' . $e->getMessage());
        }
    }
}
