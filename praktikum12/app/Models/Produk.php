<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    // Hubungin dengan produk
    protected $table = 'produk';

    // Tentuin kolom-kolom mana yang bisa diisi
    protected $fillable = [
        'kode',
        'nama',
        'harga_jual',
        'harga_beli',
        'stok',
        'min_stok',
        'deskripsi',
        'kategori_produk_id',
    ];

    // Buat fungsi relasi ke kategori produk
    public function kategori_produk() {
        return $this->belongsTo(KategoriProduk::class);
    }
}
