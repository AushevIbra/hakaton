<?php

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
        \App\User::create([
            'email' => 'test@test.ru',
            'name' => 'Test',
            'password' => bcrypt('12345678'),
            'role' => 0
        ]);
    }
}
