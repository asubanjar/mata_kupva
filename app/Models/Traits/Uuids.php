<?php

declare(strict_types=1);

namespace App\Models\Traits;

use Illuminate\Support\Str;

trait Uuids
{
    protected static function bootUuids(): void
    {
        static::creating(function ($model): void {
            $primaryKey = $model->getKeyName();

            if (!empty($model->{$primaryKey})) {
                return;
            }

            $uuid = Str::uuid();

            $model->{$primaryKey} = $uuid;
        });
    }

    public function getIncrementing()
    {
        return false;
    }

    public function getKeyType()
    {
        return 'string';
    }
}
