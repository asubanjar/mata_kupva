<?php

namespace App\Models\MonitoringPimpinan\Monitoring;

use App\Models\Master\SubjectType;
use App\Models\Traits;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations;
use Spatie\Activitylog\LogOptions;

class Subject extends Model
{
    use HasFactory;
    use Traits\Uuids;

    protected $casts = [
        'active' => 'boolean',
        'closed' => 'datetime',
        'opened' => 'datetime',
    ];

    protected $fillable = [
        'active',
        'closed',
        'closed_comment',
        'comment',
        'name',
        'opened',
        'subject_type_id',
    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logFillable();
    }

    public function subjectType(): Relations\BelongsTo
    {
        return $this->belongsTo(SubjectType::class);
    }

    public function subjectDetails(): Relations\HasMany
    {
        return $this->hasMany(SubjectDetail::class);
    }
}
