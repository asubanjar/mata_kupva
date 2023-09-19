<?php

namespace App\Models\MonitoringPimpinan\Monitoring;

use App\Models\Master\Jabatan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations;

class Action extends Model
{
    use HasFactory;

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
        'start',
        'subject_detail_id',
    ];

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
}
