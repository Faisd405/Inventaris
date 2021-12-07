<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    protected $table = 'kategori';
    protected $fillable = ['nama_kategori, fungsi, sifat_id, jumlah'];

    use HasFactory;

    public function sifat()
    {
        return $this->hasone('App\Models\sifat');
    }

    public function barang(){
        return $this->belongsTo('App\Models\barang');
    }
}
