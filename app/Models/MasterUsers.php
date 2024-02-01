<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterUsers extends Model
{
    use HasFactory;
    protected $table = 'master_users';
    protected $fillable = ['username', 'email', 'nama', 'password','role','status', 'created_at', 'update_at'];
}