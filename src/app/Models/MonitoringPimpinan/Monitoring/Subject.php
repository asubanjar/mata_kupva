<?php

namespace App\Models\MonitoringPimpinan\Monitoring;

use App\Models\Master\SubjectType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations;

class Subject extends Model
{
    use HasFactory;

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

    public function subjectType(): Relations\BelongsTo
    {
        return $this->belongsTo(SubjectType::class);
    }
}
