<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameSimilarity extends Model
{
    use HasFactory;

    protected $fillable = 
    ['game_id','other_game_id','similarity'] ;
}
