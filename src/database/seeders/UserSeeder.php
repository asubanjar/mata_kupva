<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

use function bcrypt;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::factory()->create([
            'name'         => 'Administrator',
            'username'     => 'adminsikd',
            'position'     => 'Administrator',
            'jabatan_code' => 'uk',
            'email'        => 'admin@ppatk.go.id',
            'password'     => bcrypt('secret'),
            'phone'        => '6287812625858',
        ]);

        $user = User::factory()->create([
            'name'         => 'Ivan Yustiavandana',
            'username'     => 'ixy571',
            'position'     => 'Kepala PPATK',
            'jabatan_code' => 'uk.1',
            'email'        => 'ivan.yustiavandana@ppatk.go.id',
            'password'     => bcrypt('secret'),
            'phone'        => '6287812625858',
        ]);

        $user->assignRole('Super Admin');
    }
}
