<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\barang;
use App\Models\kategori;
use App\Models\sifat;
use App\Models\buku;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Seeder User
        User::create([
            'name' => 'Faisal Dz',
            'roles' => 'admin',
            'email' => 'faisd405@gmail.com',
            'password' => 'gaktau123'
        ]);
        User::create([
            'name' => 'Giffa',
            'roles' => 'admin',
            'email' => 'giffa@gmail.com',
            'password' => 'gaktau321',
        ]);

        // Seeder Sifat
        sifat::create([
            'jenis_sifat' => 'Elektronik',
        ]);
        sifat::create([
            'jenis_sifat' => 'Non Elektronik',
        ]);

        // Seeder Kategori
        kategori::create([
            'nama_kategori' => 'PC',
            'jumlah' => '1',
            'fungsi' => 'Mengoding',
            'sifat_id' => '1',
        ]);

        kategori::create([
            'nama_kategori' => 'Furniture',
            'jumlah' => '1',
            'fungsi' => 'dipake',
            'sifat_id' => '2',
        ]);

        // Seeder Barang
        barang::create([
            'nama_barang' => 'Laptop',
            'kode_barang' => 'LAP-001',
            'detail_barang' => 'Laptop Lenovo',
            'fungsi' => 'Mengoding',
            'harga_barang' => '1000000',
            'lokasi' => 'Gedung A',
            'kategori_id' => '1',
            'user_id' => '1',
        ]);

        barang::create([
            'nama_barang' => 'Meja',
            'kode_barang' => 'MEJ-001',
            'detail_barang' => 'Meja',
            'fungsi' => 'dipake',
            'harga_barang' => '1000000',
            'lokasi' => 'Gedung A',
            'kategori_id' => '2',
            'user_id' => '2',
        ]);

        barang::create([
            'nama_barang' => 'Kursi',
            'kode_barang' => 'Kurs-001',
            'detail_barang' => 'Kursi',
            'fungsi' => 'dipake',
            'harga_barang' => '500000',
            'lokasi' => 'Gedung A',
            'kategori_id' => '2',
            'user_id' => '1',
        ]);

        barang::create([
            'nama_barang' => 'VGA',
            'kode_barang' => 'VGA-001',
            'detail_barang' => 'Kursi',
            'fungsi' => 'ngegame',
            'harga_barang' => '200000',
            'lokasi' => 'Gedung A',
            'kategori_id' => '1',
            'user_id' => null,
        ]);

        // Seeder Buku
        buku::create([
            'judul' => 'PROGRAM ABSENSI SISWA REALTIME DENGAN PHP DAN SMS GATEWAY',
            'penulis' => 'AMINUDIN',
            'penerbit' => 'CV.LOKOMEDIA',
            'tanggal' => 'Desember 2014',
            'kondisi' => 'Bagus',
            'jumlah' => '1',
            'lokasi' => 'Office 1',
        ]);

        buku::create([
            'judul' => 'PROYEK MEMBUAT WEBSITE PERIKLANAN DENGAN PHP',
            'penulis' => 'AGUS SAPUTRA',
            'penerbit' => 'CV. ASFA SOLUTION',
            'tanggal' => 'JUNI 2014',
            'kondisi' => 'Bagus',
            'jumlah' => '1',
            'lokasi' => 'Office 2',
        ]);

    }
}
