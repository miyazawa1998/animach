<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Like;
use App\Models\Articles;

class Articles extends Model
{
    use HasFactory;
    protected $table = 'articles';

    protected $fillable = [
        'user_id',
        'name',
        'category',
        'image',
        'home_data',
        'life_style',
        'friendly',
        'comment',
    ];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
 
    public function likes() {
        return $this->hasMany('App\Models\Like');
    }

}
