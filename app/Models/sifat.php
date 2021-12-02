<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class sifat extends Model
{
    protected $table = 'sifat';

    protected $fillable = ["jenis_sifat" ];
    use HasFactory;

}
