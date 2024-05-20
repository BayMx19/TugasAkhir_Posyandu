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
    public function dbAnak(){
    }
    
    public function addPencatatan(){
        $anak = DB::table('master_anak')->select('id', 'nama_anak', 'nik_anak', 'tgl_lahir' , 'tempat_lahir', 'jk', 'provinsi', 'kota', 'kecamatan', 'kelurahan', 'posyandu', 'kelahiran_ke', 'kembar', 'nama_ibu', 'umur_ibu', 'pendidikan_ibu', 'ibu_bekerja', 'nama_ayah', 'pendidikan_ayah', 'tipe_tt', 'rt', 'rw', 'no_bpjs', 'umur')->get();
    // dd($anak);
        
        return view('pencatatan.add-pencatatan', ['anak'=>$anak]);

    }
    public function input(Request $request)
        {
            // dd($request);
            try {
                DB::table('pencatatan')->insert([
                    'tgl_catat'=> $request->tgl_catat,
                    'pencatat'=>$request->pencatat,
                    'nama_anak'=>$request->nama_anak,
                    'nik_anak'=>$request->nik_anak,
                    'tempat_lahir'=>$request->tempat_lahir,
                    'tgl_lahir' => $request->tgl_lahir,
                    'Childs_Age'=>$request->Childs_Age,
                    'kondisi'=>$request->kondisi,
                    'Sex'=>$request->Sex,
                    'alamat'=>$request->alamat,
                    'provinsi'=>$request->provinsi,
                    'Region'=>$request->Region,
                    'kecamatan'=>$request->kecamatan,
                    'kelurahan'=>$request->kelurahan,
                    'Type_of_Place'=>$request->Type_of_Place,
                    'posyandu'=>$request->posyandu,
                    'Birth_Order'=>$request->Birth_Order,
                    'Twin_Child'=>$request->Twin_Child,
                    'bb'=>$request->bb,
                    'pb'=>$request->pb,
                    'lk'=>$request->lk,
                    'imd'=>$request->imd,
                    'rt' => $request->rt,
                    'rw' => $request->rw,
                    'no_bpjs' => $request->no_bpjs,
                    'nama_ibu'=>$request->nama_ibu,
                    'Mothers_Age'=>$request->mothers_age,
                    'Mothers_Working_Status'=>$request->mothers_working_status,
                    'Mothers_Education'=>$request->mothers_education,
                    'nama_ayah'=>$request->nama_ayah,
                    'Fathers_Education'=>$request->fathers_education,
                    'Drinking_Water'=>$request->Drinking_Water,
                    'Toilet_Types'=>$request->Toilet_Types,
                    'Wealth_Index'=>$request->Wealth_Index,
                    'p_stunting'=>$request->p_stunting,
                    'p_wasting'=>$request->p_wasting,
                    'p_underweight'=>$request->p_underweight,
                    'created_at' => Carbon::now(),
                ]);

                return redirect('/pencatatan')->with('success', 'Berhasil menambahkan Data Anak.');
            } catch (QueryException $e) {
                $errorMessage = $e->getMessage();
                dd($errorMessage);
                return redirect('/pencatatan')->with('error', 'Gagal menambahkan Data Anak: Coba Lagi $errorMessage' );
            }
        }
        public function detail($id)
        {
            $decryptedId = decrypt($id);
            $pencatatan = Pencatatan::find($decryptedId);

            



            if (!$pencatatan) {
                return abort(404);
            }

            return view('pencatatan.detail-pencatatan', compact('pencatatan'));
        }

        public function edit($id)
    {
        try {
        $decryptedId = decrypt($id);
        $pencatatan = Pencatatan::find($decryptedId);
        if (!$pencatatan) {
            return abort(404);
        }

        return view('pencatatan.edit-pencatatan', compact('anak'));
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
                    'tgl_catat'=> $request->tgl_catat,
                    'pencatat'=>$request->pencatat,
                    'nama_anak'=>$request->nama_anak,
                    'nik_anak'=>$request->nik_anak,
                    'Childs_Age'=>$request->childs_age,
                    'kondisi'=>$request->kondisi,
                    'Sex'=>$request->Sex,
                    'alamat'=>$request->alamat,
                    'provinsi'=>$request->provinsi,
                    'Region'=>$request->Region,
                    'kecamatan'=>$request->kecamatan,
                    'kelurahan'=>$request->kelurahan,
                    'Type_of_Place'=>$request->Type_of_Place,
                    'posyandu'=>$request->posyandu,
                    'Birth_Order'=>$request->Birth_Order,
                    'Twin_Child'=>$request->Twin_Child,
                    'bb'=>$request->bb,
                    'pb'=>$request->pb,
                    'lk'=>$request->lk,
                    'imd'=>$request->imd,
                    'nama_ibu'=>$request->nama_ibu,
                    'Mothers_Age'=>$request->mothers_age,
                    'Mothers_Working_Status'=>$request->mothers_working_status,
                    'Mothers_Education'=>$request->mothers_education,
                    'nama_ayah'=>$request->nama_ayah,
                    'Fathers_Education'=>$request->fathers_education,
                    'Drinking_Water'=>$request->Drinking_Water,
                    'Toilet_Types'=>$request->Toilet_Types,
                    'Wealth_Index'=>$request->Wealth_Index,
                    'p_stunting'=>$request->p_stunting,
                    'p_wasting'=>$request->p_wasting,
                    'p_underweight'=>$request->p_underweight,
                    'updated_at' => Carbon::now(),
        ]);
        return redirect('/pencatatan')->with('success', 'Berhasil edit Anak.');
        } catch (\Illuminate\Contracts\Encryption\DecryptException $e) {
            return abort(500, 'Error: Unable to decrypt the ID.');
        }
    }
    public function delete($id)
    {
        try {
            $decryptedId = decrypt($id);
            DB::table('pencatatan')->where('id', $decryptedId)->delete();
            return redirect('/pencatatan')->with('success', 'Berhasil hapus Anak.');
        } catch (QueryException $e) {
            return redirect('/pencatatan')->with('error', 'Gagal hapus Anak: ' . $e->getMessage());
        }
    }

    

}