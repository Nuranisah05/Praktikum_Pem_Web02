<?php

namespace App\Http\Controllers;

use App\Models\KategoriProduk;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // ambil data produk dari database
        // gabungin tablenya
        $produk = Produk::join('kategori_produk', 'produk.kategori_produk_id', '=', 'kategori_produk.id')
        // tampilin data
            ->select('produk.*', 'kategori_produk.nama as nama_kategori')
            ->get();

        // kirim data ke view
        return view('admin.produk.produk', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        $kategori_prodak = KategoriProduk::all();
        $produk = Produk::all();

        return view (admin.produk.create), compact ('kategori_produk')
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
