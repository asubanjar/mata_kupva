<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubjectType extends Model
{
    use HasFactory;

    protected $casts = [
        'active'        => 'boolean',
    ];

    protected $fillable = [
        'active',
        'code',
        'name',
    ];
}
