<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Following;

class FollowingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $following_data = [
            ['user_id' => 1, 'following_user_id' => 3], // バロン（ID: 1）はぽう（ID: 3）をフォローしてる
            ['user_id' => 2, 'following_user_id' => 3], // やすじ（ID: 2）もぽう（ID: 3）をフォローしてる
            ['user_id' => 3, 'following_user_id' => 1], // ぽう（ID: 3）は、バロン（ID: 1）をフォローしてる
        ];
    
        foreach($following_data as $following_values) {
    
            $following = new Following();
            $following->user_id = $following_values['user_id'];
            $following->following_user_id = $following_values['following_user_id'];
            $following->save();
    
        }
    }
}
