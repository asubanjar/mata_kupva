<?php

namespace App\Models\MonitoringPimpinan\Monitoring;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class Check extends Model
{
    use HasFactory;
    use LogsActivity;

    protected $casts = [
        'active' => 'boolean',
        'finish' => 'datetime',
        'start'  => 'datetime',
        'end'    => 'datetime',
    ];

    protected $fillable = [
        'action_id',
        'active',
        'closed_comment',
        'end',
        'finish',
        'name',
        'start',
    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logFillable();
    }

    public function action(): Relations\BelongsTo
    {
        return $this->belongsTo(Action::class);
    }
}
