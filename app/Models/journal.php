<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'Judul_jurnal',
        'Nama_Penerbit_jurnal',
        'Tanggal_jurnal',
        'Deskripsi_Jurnal',
        'stock',
    ];
}