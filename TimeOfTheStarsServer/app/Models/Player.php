<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Player extends Model
{
    protected $fillable = [
        'full_name', 'birth_date', 'position', 'grip', 'team_id',
        'matches', 'goals', 'assists', 'points', 'penalties', 'number'
    ];

    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }
}
