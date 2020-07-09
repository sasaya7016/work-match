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
        DB::table('users')->insert([
            ['name' => 'user1',
            'email' => 'user1@example.com',
            'number' => '0',
            'self_introduction' => 'お仕事探してます',
            'img_name' => 'sample001.jpg',
            'password' => Hash::make('password123'),
            ],
            ['name' => 'user2',
            'email' => 'user2@example.com',
            'number' => '0',
            'self_introduction' => 'すぐ行けます',
            'img_name' => 'sample002.jpg',
            'password' => Hash::make('password123'),
            ],
            ['name' => 'company1',
            'email' => 'company1@example.com',
            'number' => '1',
            'self_introduction' => '宅配の仕事です',
            'img_name' => 'sample003.jpg',
            'password' => Hash::make('password123'),
            ],
            ['name' => 'company2',
            'email' => 'company2@example.com',
            'number' => '1',
            'self_introduction' => 'デリバリー',
            'img_name' => 'sample004.jpg',
            'password' => Hash::make('password123'),
            ],
        ]);
    }
}
