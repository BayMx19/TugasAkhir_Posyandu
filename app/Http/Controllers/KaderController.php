<?php

namespace App\Http\Controllers;

use App\Models\MasterKader;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Log;


use Illuminate\Http\Request;

class KaderController extends Controller
{
    public function index()
    {
        $kader = DB::table('master_kader')->get();

        return view('master-kader.kader', compact('kader'));
    }
    public function addKader(){
        $existingEmails = DB::table('master_kader')->pluck('email')->toArray();

        $users = DB::table('master_users')
            ->where('role', 'Kader')
            ->whereNotIn('email', $existingEmails)
            ->select('id', 'email', 'nama')
            ->get();

        // dd($users);
        return view('master-kader.add-kader', ['users' => $users]);

    }
    public function input(Request $request)
    {
        try {
            DB::table('master_kader')->insert([
                'email' => $request->email,
                'nama' => $request->nama,
                'jabatan' => $request->jabatan,
                'tgl_gabung' => $request->tgl_gabung,
                'alamat' => $request->alamat,
                'rt' => $request->rt,
                'rw' => $request->rw,
                'no_telp' => $request->no_telp,
                'status' => $request->status,
                'created_at' => Carbon::now(),
            ]);

            return redirect('/master_kader')->with('success', 'Berhasil menambahkan Kader.');
        } catch (QueryException $e) {
            return redirect('/master_kader')->with('error', 'Gagal menambahkan Kader: Coba Lagi' );
        }
    }
    public function detail($id)
    {
        $decryptedId = decrypt($id);
        $kader = MasterKader::find($decryptedId);
        $users = DB::table('master_users')->where('role', 'Kader')->select('id','email', 'nama')->get();

        // dd($kader);

        if (!$kader) {
            return abort(404);
        }

        return view('master-kader.detail-kader', compact('kader', 'users'));
    }

    public function edit($id)
    {
        try {
        $decryptedId = decrypt($id);
        $kader = MasterKader::find($decryptedId);
        if (!$kader) {
            return abort(404);
        }

        return view('master-kader.edit-kader', compact('kader'));
        } catch (\Illuminate\Contracts\Encryption\DecryptException $e) {
            Log::error('Decryption error: ' . $e->getMessage());
            return abort(500, 'Error: Unable to decrypt the ID.');
        }

    }

    public function update(Request $request, $id)
    {
        try{
        // return $request;
        $decryptedId = decrypt($id);
        $kader = MasterKader::find($decryptedId);

        if (!$kader) {
            return abort(404);
        }
        DB::table('master_kader')->where('id', $decryptedId)->update([
                'email' => $request->email,
                'nama' => $request->nama,
                'jabatan' => $request->jabatan,
                'tgl_gabung' => $request->tgl_gabung,
                'alamat' => $request->alamat,
                'rt' => $request->rt,
                'rw' => $request->rw,
                'no_telp' => $request->no_telp,
                'status' => $request->status,
                'updated_at' => Carbon::now(),
        ]);
        return redirect('/master_kader')->with('success', 'Berhasil edit Kader.');
        } catch (\Illuminate\Contracts\Encryption\DecryptException $e) {
            return abort(500, 'Error: Unable to decrypt the ID.');
        }
    }

    public function delete($id)
    {
        try {
            $decryptedId = decrypt($id);
            DB::table('master_kader')->where('id', $decryptedId)->delete();
            return redirect('/master_kader')->with('success', 'Berhasil hapus Kader.');
        } catch (QueryException $e) {
            return redirect('/master_kader')->with('error', 'Gagal hapus Kader: ' . $e->getMessage());
        }
    }
}