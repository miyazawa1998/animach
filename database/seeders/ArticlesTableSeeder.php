<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Articles;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // データを追加
        $data = Articles::create([
            'user_id'    => 1,
            'user_name' => 'バロン',
            'category' => 'ハリネズミ',
            'home_data' => '一人暮らし',
            'life_style' => '休日は家にいる',
            'friendly'    => '臆病なため、触れ合いは難しい',
            'comment' => '寝てる姿や滑車回す姿がかわいい',
        ]);

        $data = Articles::create([
            'user_id'    => 2,
            'user_name' => 'やすじ',
            'category' => 'チンチラ',
            'home_data' => '家族暮らし(4人)',
            'life_style' => 'インドア',
            'friendly'    => '頭なでたり膝にのってくる',
            'comment' => '人懐っこいが、診察可能な病院が少ないため注意！',
        ]);

        $data = Articles::create([
            'user_id'    => 3,
            'user_name' => 'ぽう',
            'category' => 'モルモット',
            'home_data' => '同居(2人)',
            'life_style' => '休日は家にいる',
            'friendly'    => 'ビビりだが、慣れると傍で寝る',
            'comment' => '鳴き声が大きいため賃貸は要注意！',
        ]);
    }
}
