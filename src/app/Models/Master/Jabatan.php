<?php

namespace App\Models\Master;

use App\Models\MonitoringPimpinan\Monitoring\Action;
use Illuminate\Database\Eloquent\Builder;
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

    protected static function booted(): void
    {
        static::addGlobalScope('active', fn (Builder $builder) => $builder->where('active', 1));
    }

    public function parent(): Relations\BelongsTo
    {
        return $this->belongsTo(self::class, 'parent_code', 'code');
    }

    public function actions(): Relations\HasMany
    {
        return $this->hasMany(Action::class, 'jabatan_id');
    }

    public function scopeHasActions(Builder $query): Builder
    {
        return $query->has('actions');
    }
}
