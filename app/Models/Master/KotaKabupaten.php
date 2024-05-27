<?php

declare(strict_types=1);

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KotaKabupaten extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
    ];

    protected array $searchable = [
        'nama',
    ];
}
