<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Pencatatan;
use Database\Seeders\PencatatanSeeder;
use Illuminate\Support\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Log;


class PencatatanController extends Controller
{
    public function index()
    {
        $pencatatan = DB::table('pencatatan')->get();

        return view('pencatatan.pencatatan', compact('pencatatan'));
    }
    
    public function addPencatatan(){
        // dd($users);
        return view('pencatatan.add-pencatatan');

    }
    public function input(Request $request)
        {
            // return $request;
            try {
                DB::table('pencatatan')->insert([
                    
                    'created_at' => Carbon::now(),
                ]);

                return redirect('/master_anak')->with('success', 'Berhasil menambahkan Data Anak.');
            } catch (QueryException $e) {
                $errorMessage = $e->getMessage();
                // dd($errorMessage);
                return redirect('/master_anak')->with('error', 'Gagal menambahkan Data Anak: Coba Lagi $errorMessage' );
            }
        }
        public function detail($id)
        {
            $decryptedId = decrypt($id);
            $pencatatan = Pencatatan::find($decryptedId);

            // dd($anak);

            if (!$pencatatan) {
                return abort(404);
            }

            return view('master-anak.detail-anak', compact('anak'));
        }

        public function edit($id)
    {
        try {
        $decryptedId = decrypt($id);
        $pencatatan = Pencatatan::find($decryptedId);
        if (!$pencatatan) {
            return abort(404);
        }

        return view('master-anak.edit-anak', compact('anak'));
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
        $pencatatan = Pencatatan::find($decryptedId);

        if (!$pencatatan) {
            return abort(404);
        }
        DB::table('pencatatan')->where('id', $decryptedId)->update([
            
            'updated_at' => Carbon::now(),
        ]);
        return redirect('/master_anak')->with('success', 'Berhasil edit Anak.');
        } catch (\Illuminate\Contracts\Encryption\DecryptException $e) {
            return abort(500, 'Error: Unable to decrypt the ID.');
        }
    }
    public function delete($id)
    {
        try {
            $decryptedId = decrypt($id);
            DB::table('pencatatan')->where('id', $decryptedId)->delete();
            return redirect('/master_anak')->with('success', 'Berhasil hapus Anak.');
        } catch (QueryException $e) {
            return redirect('/master_anak')->with('error', 'Gagal hapus Anak: ' . $e->getMessage());
        }
    }

    

}