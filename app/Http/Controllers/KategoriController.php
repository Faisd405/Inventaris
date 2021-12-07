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

}
