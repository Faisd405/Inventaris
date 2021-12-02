<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    protected $table = 'kategori';
    protected $fillable = ['nama_kategori, fungsi, id_sifat, jumlah'];

    use HasFactory;
}
