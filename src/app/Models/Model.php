<?php

declare(strict_types=1);

namespace App\Models;

use App\Models\Traits\Searchable;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as BaseModel;
use Illuminate\Support\Carbon;

abstract class Model extends BaseModel
{
    use HasFactory;
    use Searchable;

    protected static bool $logFillable = true;

    /**
     * @var string[]
     */
    protected static $ignoreChangedAttributes = [
        'updated_at',
        'password',
        'deleted_at',
    ];

    /**
     * The attributes that are searchable.
     *
     * @var string[]
     */
    protected array $searchable = [];

    /**
     * The attributes that should be cast.
     *
     * @var array<string,string>
     */
    protected $casts = [];

    /**
     * The relations to eager load on every query.
     *
     * @var string[]
     */
    protected $with = [];

    public function scopeCreatedAt(Builder $builder, ?string $start = null, ?string $end = null): Builder
    {
        return $builder
            ->when($start, fn ($query) => $query->where('created_at', '>=', $start))
            ->when($end, fn ($query) => $query->where('created_at', '<=', $end));
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return Carbon::instance($date)->format('d-m-Y H:i:s');
    }
}
