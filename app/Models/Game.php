<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status',
        'description',
        'hotGame'
    ];

    public function Game_Category () 
    {
        return $this->belongsToMany(Category::class, 'category_games', 'game_id','category_id');
    }
}
