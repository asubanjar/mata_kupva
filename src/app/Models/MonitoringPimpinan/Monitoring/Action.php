<?php

namespace App\Models\MonitoringPimpinan\Monitoring;

use App\Models\Master\Jabatan;
use App\Models\Traits;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations;
use Illuminate\Database\Eloquent\Builder;
use Spatie\Activitylog\LogOptions;

class Action extends Model
{
    use HasFactory;
    use Traits\Uuids;

    protected $casts = [
        'active' => 'boolean',
        'finish' => 'datetime',
        'start'  => 'datetime',
        'end'    => 'datetime',
    ];

    protected $fillable = [
        'active',
        'closed_comment',
        'comment',
        'end',
        'finish',
        'jabatan_id',
        'name',
        'success_indicator',
        'start',
        'subject_detail_id',
    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logFillable();
    }

    public function subjectDetail(): Relations\BelongsTo
    {
        return $this->belongsTo(SubjectDetail::class);
    }

    public function jabatan(): Relations\BelongsTo
    {
        return $this->belongsTo(Jabatan::class);
    }

    public function checks(): Relations\HasMany
    {
        return $this->hasMany(Check::class);
    }

    public function scopeFinish(Builder $builder): Builder
    {
        return $builder->whereHas('checks', function (Builder $query): void {
            $query
                ->whereNotNull('finish');
        });
    }
}
