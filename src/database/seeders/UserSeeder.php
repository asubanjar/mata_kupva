<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'username' => 'adminsikd',
            'name'     => 'Administrator',
            'email'    => 'admin@ppatk.go.id',
            'password' => bcrypt('secret'),
            'phone'    => '6287812625858',
        ]);

        User::factory()->create([
            'username' => 'nxs005',
            'name'     => 'Nurman Setyawan',
            'email'    => 'nurman.setyawan@ppatk.go.id',
            'password' => bcrypt('secret'),
            'phone'    => '6287812625858',
        ]);
    }
}
