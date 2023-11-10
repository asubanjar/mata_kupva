<?php

namespace App\Enums;

enum SystemRoleEnum: string
{
    case SUPER_ADMIN = 'Super_Admin';
    case ADMINISTRATOR = 'Administrator';
    case KEARSIPAN = 'Kearsipan';
    case MONITORING_PIMPINAN = 'Monitoring_Pimpinan';
    case ADMIN_KEDINASAN = 'Admin_Kedinasan';
    case ADMIN_KEARSIAPN = 'Admin_Kearsipan';
    case KONSEPTOR_KEDINASAN = 'Konseptor_Kedinasan';
}
