<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sifat extends Model
{
    use HasFactory;

    protected $casts = [
        'active'        => 'boolean',
    ];

    protected $fillable = [
        'active',
        'code',
        'name',
        'code_name',
    ];

    protected static function booted(): void
    {
        static::created(function (self $sifat): void {
            $sifat->syncOriginal();

            $sifat->code = $sifat->code;

            $sifat->saveQuietly();
        });
    }

    public function getCodeAttribute(string $value = null): string
    {
        return $value ?? 'XxJyPn38Yh' . '.' . $this->id;
    }
}