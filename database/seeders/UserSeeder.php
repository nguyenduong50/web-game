<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Nguyen Duong',
            'email' => 'blogquantrimaytinh@gmail.com',
            'password' => '123123123'
        ]);

        User::create([
            'name' => 'Vu Thao',
            'email' => 'vuthao@gmail.com',
            'password' => '123123123'
        ]);

        User::create([
            'name' => 'Vu Thuy',
            'email' => 'vuthuy@gmail.com',
            'password' => '123123123'
        ]);

        User::create([
            'name' => 'Nguyen Trang',
            'email' => 'nguyentrang@gmail.com',
            'password' => '123123123'
        ]);

        User::create([
            'name' => 'Vu Dong',
            'email' => 'vudong@gmail.com',
            'password' => '123123123'
        ]);
    }
}
