<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return User::create([
            'name'     => 'Administrator',
            'email'    => 'admin@example.com',
            'password' => Hash::make('12345678'),
            'role'     => 1,
        ]);
    }
}
