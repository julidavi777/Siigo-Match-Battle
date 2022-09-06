<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'rank',
        'attack',
        'defense',
        'energy',
        'intelligence',
        'tactic'
    ];

    public function users(){
        return $this->belongsToMany(User::class);
    }
}
