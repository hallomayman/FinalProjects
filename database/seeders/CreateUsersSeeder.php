<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin =[
            [
                'name'=> 'Admin User',
                'email'=>'admin@gmail.com',
                'type'=>0,
                'password'=>bcrypt('123456')
            ],

                [
                    'name'=> ' User',
                    'email'=>'user@gmail.com',
                    'type'=>0,
                    'password'=>bcrypt('123456')
                ]

        ];
    }
}
