<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Icons extends Model
{
    use HasFactory;

        // 割り当て許可
        protected $fillable = [
            'icon_image',
            'icon_name',
           ];
}
