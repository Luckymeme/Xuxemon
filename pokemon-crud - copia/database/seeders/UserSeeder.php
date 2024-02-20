<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'UsuarioRol0',
            'email' => 'ad@ad.com',
            'password' => '1234',
            'role' => 0,
        ]);

        User::create([
            'name' => 'UsuarioRol1',
            'email' => 'us@us.com',
            'password' => '1234',
            'role' => 1,
        ]);
    }
}
