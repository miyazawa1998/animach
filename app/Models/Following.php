<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Following extends Model
{
    use HasFactory;

    // Userモデルとのリレーションシップをつくる
    public function user() { // 追加

    return $this->belongsTo(User::class, 'user_id', 'id');

}
}
