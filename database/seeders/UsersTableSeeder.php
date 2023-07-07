<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // データを追加
        $user = User::create([
            'login_id'    => 'bbb@gamil.com',
            'name' => 'バロン',
            'password' => 'bbb',
        ]);

        // データを追加
        $user = User::create([
            'login_id'    => 'yyy@gamil.com',
            'name' => 'やすじ',
            'password' => 'yyy',
        ]);

        // データを追加
        $user = User::create([
            'login_id'    => 'ppp@gamil.com',
            'name' => 'ぽう',
            'password' => 'ppp',
        ]);
    }
}
