<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gunung extends Model
{
    protected $table = 'gunung'; // sesuaikan dengan nama tabel di database

    // Menonaktifkan timestamps
    public $timestamps = false;

    // tentukan atribut yang bisa diisi
    protected $fillable = [
        'nama',
        'provinsi',
        'daerah',
        'ketinggian',
        'deskripsi',
        'latitude',
        'longitude',
        'jalur',
        'rating',
        'gambar',
    ];


    protected $casts = [
        'ketinggian' => 'float',
        'rating' => 'float',
    ];

    public function pengalaman()
    {
        return $this->hasMany(Pengalaman::class, 'id_pengalaman');
    }
}
