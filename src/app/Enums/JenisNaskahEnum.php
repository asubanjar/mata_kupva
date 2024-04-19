<?php

declare(strict_types=1);

namespace App\Enums;

enum JenisNaskahEnum: string
{
    case NASKAH_DINAS_UPLOAD = 'to_uploadnaskah';
    case SURAT_DINAS_UPLOAD  = 'inbox';
}
