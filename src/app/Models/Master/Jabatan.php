<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations;

class Jabatan extends Model
{
    use HasFactory;

    protected $casts = [
        'active'        => 'boolean',
    ];

    protected $fillable = [
        'active',
        'code',
        'description',
        'name',
        'parent_code',
    ];

    public function parent(): Relations\BelongsTo
    {
        return $this->belongsTo(self::class, 'parent_code', 'code');
    }
}
