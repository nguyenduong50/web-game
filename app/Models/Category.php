<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory; 

    protected $fillable = [
        'name',
        'status',
        'description'
    ];

    public function Category_Game () 
    {
        return $this->belongsToMany(Game::class, 'category_games', 'category_id', 'game_id');
    }
}
