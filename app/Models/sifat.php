<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sifat extends Model
{
    protected $table = 'sifat';

    protected $fillable = ['jenis_sifat'];

    use HasFactory;

    public function kategori()
    {
        return $this->belongsTo('App\Models\kategori');
    }
}
