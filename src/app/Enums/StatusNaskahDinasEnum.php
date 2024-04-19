<?php

declare(strict_types=1);

namespace App\Enums;

enum StatusNaskahDinasEnum: string
{
    case DRAFT      = '3';
    case PENGAJUAN  = '1';
    case SETUJUI    = '0';
    case DISTRIBUSI = '2';
    case TOLAK      = '4';
}
