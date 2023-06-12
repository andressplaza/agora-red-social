<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name'      => 'Admin',
            'username'  => 'admin',
            'email'     => 'admin@example.com',
            'password'  => bcrypt('password'),
            'type'      => User::ADMIN,
        ]);

        

        User::factory()->create([
            'name'      => 'Moderator',
            'username'  => 'moderator',
            'email'     => 'moderator@example.com',
            'password'  => bcrypt('password'),
            'type'      => User::MODERATOR,
        ]);



        User::factory()->count(10)->create();
    }
}
