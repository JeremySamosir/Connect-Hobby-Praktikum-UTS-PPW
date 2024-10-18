<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    public function run(): void
    {
        $userData = [
            [
            'name'=> 'indah',
            'email'=>'indah@gmail.com',
            'hobby'=>'musik',
            'password'=>bcrypt('indah'),
            ],
            [
            'name'=> 'yohana',
            'email'=>'yohana@gmail.com',
            'hobby'=>'lukis',
            'password'=>bcrypt('yohana'),
            ],
            [
            'name'=> 'liony',
            'email'=>'liony@gmail.com',
            'hobby'=>'tari',
            'password'=>bcrypt('liony'),
            ],
            [
            'name'=> 'jeremy',
            'email'=>'jeremy@gmail.com',
            'hobby'=>'musik',
            'password'=>bcrypt('jeremy'),
                ],

        ];

        foreach($userData as $key => $val){
            User::create($val);

        }
    }
}
