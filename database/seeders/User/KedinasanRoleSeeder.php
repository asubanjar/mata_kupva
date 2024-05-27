<?php

namespace Database\Seeders\User;

use App\Enums\SystemRoleEnum;
use App\Models\User;
use Illuminate\Database\Seeder;

class KedinasanRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /** ADMIN KEDINASAN*/
        $admin_kedinasan = User::where('name', 'Muhammad Ryan Andalib')->firstOrFail();

        $admin_kedinasan->assignRole(SystemRoleEnum::ADMIN_KEDINASAN->value);

        /** KONSEPTOR KEDINASAN*/
        $arr_konseptor_kedinasan = [
            'Kartika Hendra Sary',
            'Retno Indri Hastuti',
            'Nistra Stevani',
        ];
        $konseptor_kedinasans = User::whereIn('name', $arr_konseptor_kedinasan)->get();

        foreach ($konseptor_kedinasans as $konseptor_kedinasan) {
            $konseptor_kedinasan->assignRole(SystemRoleEnum::KONSEPTOR_KEDINASAN->value);
        }
    }
}
