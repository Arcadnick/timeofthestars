<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Team;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    public function run(): void
    {
        Team::create([
            'name' => 'ХК "Переславль"',
            'city' => 'Переславль',
            'players_count' => 28,
            'wins' => 15,
            'losses' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Team::create([
            'name' => 'ХК "Вымпел-v"',
            'city' => 'Ярославль',
            'players_count' => 33,
            'wins' => 10,
            'losses' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Team::create([
            'name' => 'ХК "Ярославич"',
            'city' => 'Ярославль',
            'players_count' => 29,
            'wins' => 5,
            'losses' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Team::create([
            'name' => 'ХК "Торпедо"',
            'city' => 'Ярославль',
            'players_count' => 30,
            'wins' => 15,
            'losses' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Team::create([
            'name' => 'ХК "Вымпел-к"',
            'city' => 'Ярославль',
            'players_count' => 28,
            'wins' => 15,
            'losses' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Team::create([
            'name' => 'ХК "Искра"',
            'city' => 'Ярославль',
            'players_count' => 18,
            'wins' => 15,
            'losses' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Team::create([
            'name' => 'ХК "Локомотив СЖД"',
            'city' => 'Ярославль',
            'players_count' => 22,
            'wins' => 15,
            'losses' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
