<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory()->create([
            'username'  => 'admin',
            'name'      => 'Administrator',
            'email'     => 'admin@ppatk.go.id',
            'password'  => bcrypt('secret'),
            'phone'     => '6287812625858'
        ]);
    }
}
