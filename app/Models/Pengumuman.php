<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    use HasFactory;

    protected $table = 'pengumumans'; // pastikan plural (pengumumans)
    protected $fillable = [
        'judul',
        'isi',
        'gambar',
        'tanggal',
        'penulis',
    ];
}
