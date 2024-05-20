<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterAnak extends Model
{
    use HasFactory;
    protected $table = 'master_anak';
    protected $fillable = ['tgl_daftar', 'pencatat', 'nama_anak', 'nik_anak', 'tempat_lahir', 'tgl_lahir', 'umur', 'kondisi', 'jk', 'alamat', 'provinsi', 'kota', 'kecamatan', 'kelurahan', 'tipe_tt', 'posyandu', 'kelahiran_ke', 'kembar', 'nama_ibu', 'nik_ibu', 'tgl_lahir_ibu', 'umur_ibu', 'ibu_bekerja', 'pendidikan_ibu', 'nama_ayah', 'nik_ayah', 'tgl_lahir_ayah', 'umur_ayah', 'ayah_bekerja', 'pendidikan_ayah', 'created_at', 'updated_at', 'rt', 'rw','no_bpjs'];

}