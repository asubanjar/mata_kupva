<?php

namespace App\Models\MonitoringPimpinan\Monitoring;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}