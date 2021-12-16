<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategori;

class KategoriController extends Controller
{
    //index json
    public function index()
    {
        $kategori = kategori::all();
        return response([
            'success' => true,
            'message' => 'List Semua kategori',
            'kategori' => $kategori,
        ], 200);
    }

    public function indexnama(){
        $namakategori = kategori::pluck('nama_kategori');
        $jumlah = kategori::pluck('jumlah');
        return response([
            'success' => true,
            'message' => 'List Semua kategori',
            'kategori' => $namakategori,
            'jumlah' => $jumlah,
        ], 200);
    }
}
