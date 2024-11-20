<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    use HasFactory;

    protected $lable = "santris";
    protected $fillable = ['no_induk', 'nama', 'ttl', 'nama_wali', 'no_hp_wali', 'alamat', 'status'];
}
