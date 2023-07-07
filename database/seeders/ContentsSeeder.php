<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contents')->insert([
            'category' => '犬',
            'home_data' => "家に常に人がいる",
            'life_style' => "休日は家にいる",
            'friendly' => "常に一緒にいたい",
            'description' => "いぬ",
            'point' => 'いぬ',
        ]);

        DB::table('contents')->insert([
            'category' => '猫',
            'home_data' => "一人暮らし",
            'life_style' => "アウトドア",
            'friendly' => "ほどほどに触れ合いたい",
            'description' => "ねこ",
            'point' => 'ねこ',
        ]);

        DB::table('contents')->insert([
            'category' => 'うさぎ',
            'home_data' => "同居(二人)",
            'life_style' => "インドア",
            'friendly' => "お世話だけでもいい",
            'description' => "うさぎ",
            'point' => 'うさぎ',
        ]);
    }
}
