<?php

declare(strict_types=1);

namespace App\Models\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

trait AutoFlushCache
{
    public static function bootAutoFlushCache(): void
    {
        static::saved(fn ($model) => self::clearCahce($model));

        static::deleted(fn ($model) => self::clearCahce($model));
    }

    protected static function clearCahce(Model $model): void
    {
        Cache::tags(get_class($model))->flush();
    }
}
