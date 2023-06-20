<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriProduk extends Model
{
    use HasFactory;
    protected $table = 'kategori_produk';

// Bikin kolom 
     protected $fillable = [
        'nama'
     ];

     //Definisi reelasi "has many" dengan model produk
     public function produk(){
        return $this->hasMany(produk::class);
     }
}
