<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class UnitKerja extends Model
{
    use HasUuids;

    protected $fillable = [
        'nama',
        'alias',
        'keterangan',
    ];
}
