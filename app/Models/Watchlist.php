<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Watchlist extends Model
{
    use HasFactory;

    protected $table = 'watchlist';

    protected $fillable = [
        'nama',
        'jabatan',
        'nama_kupva',
        'teregistrasi_ahu',
    ];
}