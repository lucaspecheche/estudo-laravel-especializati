<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'  => 'Lucas Lima',
            'email' => 'lucaspecheche@gmail.com',
            'password'  => bcrypt(123456),
        ]);

        User::create([
            'name'  => 'Outro usuário',
            'email' => 'outro@gmail.com',
            'password'  => bcrypt(123456),
        ]);
    }
}
