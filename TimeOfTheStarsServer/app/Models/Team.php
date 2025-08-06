<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Team extends Model
{
    protected $fillable = ['name', 'city', 'players_count', 'wins', 'losses'];

    public function players(): HasMany
    {
        return $this->hasMany(Player::class);
    }

    public function gamesAsTeamA()
    {
        return $this->hasMany(Game::class, 'team_a_id');
    }

    public function gamesAsTeamB()
    {
        return $this->hasMany(Game::class, 'team_b_id');
    }
}
