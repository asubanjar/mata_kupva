<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Urgensi extends Model
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

    protected static function booted(): void
    {
        static::created(function (self $urgensi): void {
            $urgensi->syncOriginal();

            $urgensi->code = $urgensi->code;

            $urgensi->saveQuietly();
        });
    }

    public function getCodeAttribute(string $value = null): string
    {
        return $value ?? 'XxJyPn38Yh' . '.' . $this->id;
    }
}