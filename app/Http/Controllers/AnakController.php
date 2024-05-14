<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\MasterAnak;
use Illuminate\Support\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Log;

class AnakController extends Controller
{
    public function index()
    {
        $anak = DB::table('master_anak')->select('id', 'nama_anak')->get();

        return view('master-anak.anak', compact('anak'));
    }


    public function addAnak(){
        // dd($users);
        return view('master-anak.add-anak');

    }
    public function input(Request $request)
        {
            // return $request;
            try {
                DB::table('master_anak')->insert([
                    'tgl_daftar' => $request->tgl_daftar,
                    'pencatat' => $request->pencatat,
                    'nama_anak' => $request->nama_anak,
                    'nik_anak' => $request->nik_anak,
                    'tempat_lahir' => $request->tempat_lahir,
                    'tgl_lahir' => $request->tgl_lahir,
                    'umur' => $request->umur,
                    'kondisi' => $request->kondisi,
                    'jk' => $request->jk,
                    'alamat' => $request->alamat,
                    'provinsi' => $request->provinsi,
                    'kota' => $request->kota,
                    'kecamatan' => $request->kecamatan,
                    'kelurahan' => $request->kelurahan,
                    'tipe_tt' => $request->tipe_tt,
                    'posyandu' => $request->posyandu,
                    'kelahiran_ke' => $request->kelahiran_ke,
                    'kembar' => $request->kembar,
                    'nama_ibu' => $request->nama_ibu,
                    'nik_ibu' => $request->nik_ibu,
                    'tgl_lahir_ibu' => $request->tgl_lahir_ibu,
                    'umur_ibu' => $request->umur_ibu,
                    'ibu_bekerja' => $request->ibu_bekerja,
                    'pendidikan_ibu' => $request->pendidikan_ibu,
                    'nama_ayah' => $request->nama_ayah,
                    'nik_ayah' => $request->nik_ayah,
                    'tgl_lahir_ayah' => $request->tgl_lahir_ayah,
                    'umur_ayah' => $request->umur_ayah,
                    'ayah_bekerja' => $request->ayah_bekerja,
                    'pendidikan_ayah' => $request->pendidikan_ayah,
                    'bb' => $request->bb,
                    'pb' => $request->pb,
                    'lk'=> $request->lk,
                    'imd' => $request->imd, 
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
            $anak = MasterAnak::find($decryptedId);

            // dd($anak);

            if (!$anak) {
                return abort(404);
            }

            return view('master-anak.detail-anak', compact('anak'));
        }

        public function edit($id)
    {
        try {
        $decryptedId = decrypt($id);
        $anak = MasterAnak::find($decryptedId);
        if (!$anak) {
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
        $anak = MasterAnak::find($decryptedId);

        if (!$anak) {
            return abort(404);
        }
        DB::table('master_anak')->where('id', $decryptedId)->update([
            'tgl_daftar' => $request->tgl_daftar,
            'pencatat' => $request->pencatat,
            'nama_anak' => $request->nama_anak,
            'nik_anak' => $request->nik_anak,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'umur' => $request->umur,
            'kondisi' => $request->kondisi,
            'jk' => $request->jk,
            'alamat' => $request->alamat,
            'provinsi' => $request->provinsi,
            'kota' => $request->kota,
            'kecamatan' => $request->kecamatan,
            'kelurahan' => $request->kelurahan,
            'tipe_tt' => $request->tipe_tt,
            'posyandu' => $request->posyandu,
            'kelahiran_ke' => $request->kelahiran_ke,
            'kembar' => $request->kembar,
            'nama_ibu' => $request->nama_ibu,
            'nik_ibu' => $request->nik_ibu,
            'tgl_lahir_ibu' => $request->tgl_lahir_ibu,
            'umur_ibu' => $request->umur_ibu,
            'ibu_bekerja' => $request->ibu_bekerja,
            'pendidikan_ibu' => $request->pendidikan_ibu,
            'nama_ayah' => $request->nama_ayah,
            'nik_ayah' => $request->nik_ayah,
            'tgl_lahir_ayah' => $request->tgl_lahir_ayah,
            'umur_ayah' => $request->umur_ayah,
            'ayah_bekerja' => $request->ayah_bekerja,
            'pendidikan_ayah' => $request->pendidikan_ayah,
            'bb' => $request->bb,
            'pb' => $request->pb,
            'lk'=> $request->lk,
            'imd' => $request->imd, 
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
            DB::table('master_anak')->where('id', $decryptedId)->delete();
            return redirect('/master_anak')->with('success', 'Berhasil hapus Anak.');
        } catch (QueryException $e) {
            return redirect('/master_anak')->with('error', 'Gagal hapus Anak: ' . $e->getMessage());
        }
    }

}