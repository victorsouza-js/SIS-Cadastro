<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usuarios')->insert([
            [
            'name' => 'Admin',
            'email' => 'admin@hotmail.com',
            'password' => '**********',
            ],
            [
            'name' => 'User',
            'email' => 'user@hotmail.com',
            'password' => '**********',
            ],
            [
            'name' => 'User2',
            'email' => 'user2@hotmail.com',
            'password' => '**********',
            ],
            [
            'name' => 'User3',
            'email' => 'user3@hotmail.com',
            'password' => '**********',
            ],
            [
            'name' => 'User4',
            'email' => 'user4@hotmail.com',
            'password' => '**********',
            ],
            [
            'name' => 'User5',
            'email' => 'user5@hotmail.com',
            'password' => '**********',
            ],
            
            ]);
    }
}
