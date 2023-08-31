<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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

    public function generateCode(): string
    {
        $urgensi = DB::table('urgensis')->latest('code')->whereNotNull('code')->first();

        if (!$urgensi) {
            $codeNumber = 1;
        } else {
            $codeNumber = (int) explode('.', $urgensi->id) + 1;
        }

        return 'XxJyPn38Yh' . '-' . $codeNumber;
    }
}
