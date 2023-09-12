<?php

namespace App\Models\MonitoringPimpinan\Monitoring;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations;

class SubjectDetail extends Model
{
    use HasFactory;

    protected $casts = [
        'active'  => 'boolean',
        'end'     => 'datetime',
        'is_done' => 'boolean',
        'start'   => 'datetime',
    ];

    protected $fillable = [
        'active',
        'closed_comment',
        'comment',
        'end',
        'is_done',
        'name',
        'start',
        'subject_id',
    ];

    public function subject(): Relations\BelongsTo
    {
        return $this->belongsTo(Subject::class);
    }
}
