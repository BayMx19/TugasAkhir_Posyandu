<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pencatatan;
use Symfony\Component\HttpFoundation\StreamedResponse;

class DownloadPencatatanController extends Controller
{
    public function download(Request $request)
    {
        $tgl_catat_dari = $request->input('tgl_catat_dari');
    $tgl_catat_hingga = $request->input('tgl_catat_hingga');
    $filename = 'data_pencatatan.csv';

    // Fetch data based on the given date range
    $data = $this->getDataByDateRange($tgl_catat_dari, $tgl_catat_hingga);

    $response = new StreamedResponse(function() use ($data) {
        $handle = fopen('php://output', 'w');

        // Header untuk file CSV
        fputcsv($handle, ['tgl_catat', 'pencatat', 'nama_anak', 'nik_anak', 'Childs_Age', 'kondisi', 'Sex', 'alamat', 'provinsi', 'Region', 'kecamatan', 'kelurahan', 'rt', 'rw', 'no_bpjs', 'Type_of_Place', 'posyandu', 'Birth_Order', 'Twin_Child', 'bb', 'pb', 'lk', 'imd', 'nama_ibu', 'Mothers_Age', 'Mothers_Working_Status', 'Mothers_Education', 'nama_ayah', 'Fathers_Education', 'Drinking_Water', 'Toilet_Types', 'Wealth_Index', 'p_stunting', 'p_wasting', 'p_underweight']);

        // Data dari tabel pencatatan
        foreach ($data as $row) {
            fputcsv($handle, $row);
        }
        fclose($handle);
    });

    $response->headers->set('Content-Type', 'text/csv');
    $response->headers->set('Content-Disposition', 'attachment; filename="' . $filename . '"');

    return $response;
    }

    private function getDataByDateRange($tgl_catat_dari, $tgl_catat_hingga)
    {
        $data = Pencatatan::whereBetween('tgl_catat', [$tgl_catat_dari, $tgl_catat_hingga])->get()->toArray();

    return $data;
    }
}