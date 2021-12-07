<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barang;
use App\Models\kategori;

class BarangController extends Controller
{
    //index with json
    public function index()
    {
        $barang = barang::with('user','kategori')->get();
        return response([
            'success' => true,
            'message' => 'List Semua barang',
            'barang' => $barang,
        ], 200);
    }

}
