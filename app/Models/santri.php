<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    use HasFactory;

    protected $lable = "santris";
    protected $fillable = [
        'no_induk', 
        'pas_foto',
        'nama', 
        'ttl', 
        'jenis_kelamin', 
        'jumlah_saudara', 
        'anak_ke', 
        'asal_sekolah',
        'nama_ayah', 
        'nama_ibu', 
        'pekerjaan_ayah', 
        'pekerjaan_ibu', 
        'penghasilan_ayah', 
        'penghasilan_ibu', 
        'alamat_ortu',
        'nama_wali',
        'pekerjaan_wali', 
        'penghasilan_wali', 
        'no_hp_wali', 
        'alamat_wali',
        'status'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
