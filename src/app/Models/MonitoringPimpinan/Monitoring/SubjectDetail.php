<?php

namespace App\Models\MonitoringPimpinan\Monitoring;

use App\Models\Traits;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations;
use Spatie\Activitylog\LogOptions;

class SubjectDetail extends Model
{
    use HasFactory;
    use Traits\Uuids;

    protected $casts = [
        'active' => 'boolean',
        'end'    => 'datetime',
        'finish' => 'datetime',
        'start'  => 'datetime',
    ];

    protected $fillable = [
        'action_comment',
        'active',
        'comment',
        'end',
        'finish',
        'name',
        'start',
        'subject_id',
    ];

    protected static function booted(): void
    {
        static::addGlobalScope('active', fn (Builder $builder) => $builder->where('active', 1));
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logFillable();
    }

    public function subject(): Relations\BelongsTo
    {
        return $this->belongsTo(Subject::class);
    }

    public function actions(): Relations\HasMany
    {
        return $this->hasMany(Action::class);
    }
}
