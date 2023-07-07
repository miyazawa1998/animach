<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Like;

class LikesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // データを追加
        $user = Like::create([
            'user_id'    => 1,
            'article_id' => 2,
        ]);

        // データを追加
        $user = Like::create([
            'user_id'    => 2,
            'article_id' => 3,
        ]);

        // データを追加
        $user = Like::create([
            'user_id'    => 3,
            'article_id' => 1,
        ]);
    }
}
