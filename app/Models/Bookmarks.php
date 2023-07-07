<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookmarks extends Model
{
    use HasFactory;

        // 割り当て許可
        protected $fillable = [
            'user_id',
            'contents_id',
           ];
}
