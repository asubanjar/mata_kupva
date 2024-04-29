<?php

declare(strict_types=1);

namespace App\Models\Kearsipan;

use App\Models\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InboxAttachment extends Model
{
    use HasFactory;
    use Uuids;

    protected $fillable = [
        'gir_id',
        'nid',
        'filename',
        'filename_fake',
        'mimetype',
        'filesize',
        'temp_path',
        'path',
        'uniqid',
        'status',
        'keterangan',
        'user_id',
        'people_role_id',
    ];
}
