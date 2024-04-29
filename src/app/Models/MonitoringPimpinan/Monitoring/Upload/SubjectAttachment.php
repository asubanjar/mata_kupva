<?php

declare(strict_types=1);

namespace App\Models\MonitoringPimpinan\Monitoring\Upload;

use App\Models\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubjectAttachment extends Model
{
    use HasFactory;
    use Uuids;

    protected $fillable = [
        'subject_id',
        'filename',
        'path',
        'mimetype',
        'filesize',
        'uniqid',
        'temp_path',
    ];
}
