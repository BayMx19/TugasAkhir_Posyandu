<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterKader extends Model
{
    use HasFactory;
    protected $table = 'master_kader';
    protected $fillable = ['email', 'nama', 'jabatan', 'tgl_gabung', 'alamat', 'rt', 'rw', 'status', 'created_at', 'updated_at'];

}