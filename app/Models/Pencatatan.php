<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pencatatan extends Model
{
    use HasFactory;
    protected $table = 'pencatatan';
    protected $fillable = ['tgl_catat', 'pencatat', 'nama_anak', 'nik_anak', 'Childs_Age',' kondisi', 'Sex', 'alamat', 'provinsi', 'Region', 'kecamatan', 'kelurahan', 'rt', 'rw', 'no_bpjs', 'Type_of_Place','posyandu', 'Birth_Order', 'Twin_Child', 'bb', 'pb', 'lk', 'imd', 'nama_ibu', 'Mothers_Age', 'Mothers_Working_Status', 'Mothers_Education', 'nama_ayah', 'Fathers_Education', 'Drinking_Water', 'Toilet_Types', 'Wealth_Index', 'p_stunting', 'p_wasting', 'p_underweight'];

}