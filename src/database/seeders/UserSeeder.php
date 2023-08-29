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
            'username' => 'adminsikd',
            'name'     => 'Administrator',
            'email'    => 'admin@ppatk.go.id',
            'password' => bcrypt('secret'),
            'phone'    => '6287812625858',
        ]);

        $user = User::factory()->create([
            'username' => 'nxs005',
            'name'     => 'Nurman Setyawan',
            'email'    => 'nurman.setyawan@ppatk.go.id',
            'password' => bcrypt('secret'),
            'phone'    => '6287812625858',
        ]);

        $user->assignRole('Super Admin');
    }
}
