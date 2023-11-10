<?php

namespace Database\Seeders\User;

use App\Enums\SystemRoleEnum;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /** ADMIN */
        $adminRole = Role::create(['name' => SystemRoleEnum::ADMINISTRATOR]);
        $adminRole->syncPermissions([
            'master',
        ]);

        /** KEARSIPAN */
        $adminRole = Role::create(['name' => SystemRoleEnum::KEARSIPAN]);
        $adminRole->syncPermissions([
            'kearsipan',
        ]);

        /** MONITORING PIMPINAN */
        $adminRole = Role::create(['name' => SystemRoleEnum::MONITORING_PIMPINAN]);
        $adminRole->syncPermissions([
            'monitoring',
        ]);

        /** ADMIN KEDINASAN */
        $adminRole = Role::create(['name' => SystemRoleEnum::ADMIN_KEDINASAN]);
        $adminRole->syncPermissions([
            'kearsipan',
            'kearsipan.surat_tugas.view-any',
            'kearsipan.surat_tugas.create',
            'kearsipan.surat_tugas.update',
            'kearsipan.surat_tugas.delete',
        ]);

        /** KONSEPTOR KEDINASAN */
        $adminRole = Role::create(['name' => SystemRoleEnum::KONSEPTOR_KEDINASAN]);
        $adminRole->syncPermissions([
            'kearsipan',
            'kearsipan.surat_tugas.view-any',
            'kearsipan.surat_tugas.create',
            'kearsipan.surat_tugas.update',
            'kearsipan.surat_tugas.delete',
        ]);

        /** SUPER ADMIN */
        Role::create(['name' => SystemRoleEnum::SUPER_ADMIN]);
    }
}
