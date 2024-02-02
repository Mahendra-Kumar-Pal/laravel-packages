<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name'=>'User',
                'email'=>'user@gmail.com'
            ],
            [
                'name'=>'Admin',
                'email'=>'admin@gmail.com'
            ]
        ];
        foreach($data as $value){
            $user=\App\Models\User::create([
                'name'=>$value['name'],
                'email'=>$value['email'],
                'password'=>bcrypt('password')
            ]);
            $user->assignRole($value['name']);
        }
    }
}
