<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengalaman extends Model
{
    use HasFactory;

    protected $table = 'pengalaman';

    protected $fillable = [
        'id_pengalaman',
        'id',            // Ganti dengan 'id'
        'nama',
        'tanggal',
        'deskripsi',
    ];

    public function gunung()
    {
        return $this->belongsTo(Gunung::class, 'id');  // Sesuaikan dengan 'id'
    }

    public $timestamps = false;
}
