<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\barang;

class UserController extends Controller
{
    //crud api
    public function index()
    {
        $users = User::latest()->get();
        return response([
            'success' => true,
            'message' => 'List Semua Murid',
            'data' => $users
        ], 200);
    }


    public function show($id)
    {
        $users = User::find($id);
        $barangs = barang::where('user_id', $id)->get();

        if ($barangs) {
            return response()->json([
                'success' => true,
                'message' => 'Detail barang barangs!',
                'data'    => $barangs,
                'user' => $users
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'barangs Tidak Ditemukan!',
                'data'    => ''
            ], 404);
        }
    }
}
