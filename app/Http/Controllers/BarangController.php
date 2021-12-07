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

    public function indexNoUser(){
        $barang = barang::where('user_id',null)->get();
        return response()->json([
            'success' => true,
            'message' => 'barang Berhasil Ditampilkan!',
            'barang'    => $barang
        ], 200);
    }

    public function store(Request $request)
    {
        $barang = barang::create($request->all());
        return response()->json([
            'success' => true,
            'message' => 'barang Berhasil Ditambahkan!',
            'data'    => $barang
        ], 200);
    }

    public function destroy($id)
    {
        $barang = barang::find($id);
        $barang->delete();
        return response()->json([
            'success' => true,
            'message' => 'barang Berhasil Dihapus!',
            'data'    => $barang
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $barang = barang::find($id);
        $barang->update($request->all());
        return response()->json([
            'success' => true,
            'message' => 'barang Berhasil Diupdate!',
            'barang'    => $barang
        ], 200);
    }

    public function show($id)
    {
        $barang = barang::find($id);
        $kategori = kategori::all();
        return response()->json([
            'success' => true,
            'message' => 'barang Berhasil Ditampilkan!',
            'barang'    => $barang,
            'kategori' => $kategori
        ], 200);
    }

}
