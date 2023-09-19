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
        'finish'  => 'datetime',
        'is_done' => 'boolean',
        'start'   => 'datetime',
    ];

    protected $fillable = [
        'action_comment',
        'active',
        'comment',
        'end',
        'finish',
        'is_done',
        'name',
        'start',
        'subject_id',
    ];

    public function subject(): Relations\BelongsTo
    {
        return $this->belongsTo(Subject::class);
    }

    public function actions(): Relations\HasMany
    {
        return $this->hasMany(Action::class);
    }
}
