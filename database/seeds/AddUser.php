<?php

use Illuminate\Database\Seeder;
use App\User;

class AddUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@admin',
            'password' => Hash::make("12345678")
            ]);
    }
}
