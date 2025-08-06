<?php

namespace App\Http\Controllers\Api;

use App\Models\Player;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PlayerController extends Controller
{
    public function index()
    {
        return Player::with('team')->get();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string',
            'birth_date' => 'nullable|date',
            'position' => 'nullable|string',
            'grip' => 'nullable|string',
            'team_id' => 'nullable|exists:teams,id',
            'matches' => 'nullable|integer|min:0',
            'goals' => 'nullable|integer|min:0',
            'assists' => 'nullable|integer|min:0',
            'penalties' => 'nullable|integer|min:0',
            'number' => 'nullable|integer|min:0',
        ]);

        return Player::create($validated);
    }

    public function show(Player $player)
    {
        return $player->load('team');
    }

    public function update(Request $request, Player $player)
    {
        $validated = $request->validate([
            'full_name' => 'sometimes|required|string',
            'birth_date' => 'nullable|date',
            'position' => 'nullable|string',
            'grip' => 'nullable|string',
            'team_id' => 'nullable|exists:teams,id',
            'matches' => 'nullable|integer|min:0',
            'goals' => 'nullable|integer|min:0',
            'assists' => 'nullable|integer|min:0',
            'penalties' => 'nullable|integer|min:0',
            'number' => 'nullable|integer|min:0',
        ]);

        $player->update($validated);
        return $player;
    }

    public function destroy(Player $player)
    {
        $player->delete();
        return response()->noContent();
    }
}
