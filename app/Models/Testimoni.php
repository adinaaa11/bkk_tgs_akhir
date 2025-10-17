<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    use HasFactory;

    // Nama tabel (opsional, Laravel otomatis plural: 'testimonis')
    protected $table = 'testimonis';

    // Kolom yang boleh diisi (mass assignment)
    protected $fillable = [
        'nama',
        'posisi',
        'isi',
        'foto',
    ];
}
