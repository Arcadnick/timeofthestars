<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Game;
use App\Models\Team;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class GameMatchSeeder extends Seeder
{
    public function run(): void
    {
        $pereslavl = Team::where('name', 'ХК "Переславль"')->first()->id;
        $vympelV = Team::where('name', 'ХК "Вымпел-v"')->first()->id;
        $yaroslavich = Team::where('name', 'ХК "Ярославич"')->first()->id;
        $torpedo = Team::where('name', 'ХК "Торпедо"')->first()->id;
        $vympelK = Team::where('name', 'ХК "Вымпел-к"')->first()->id;
        $iskra = Team::where('name', 'ХК "Искра"')->first()->id;
        $lokomotiv = Team::where('name', 'ХК "Локомотив СЖД"')->first()->id;

        $matches = [
            [
                'team_a_id' => $pereslavl,
                'team_b_id' => $vympelV,
                'date' => Carbon::now()->addDays(5)->toDateString(),
                'time' => '18:00:00',
                'location' => 'СК "Торпедо"',
                'score' => null
            ],
            [
                'team_a_id' => $yaroslavich,
                'team_b_id' => $torpedo,
                'date' => Carbon::now()->addDays(7)->toDateString(),
                'time' => '19:30:00',
                'location' => 'СК "ГУОР"',
                'score' => '2:1'
            ],
            [
                'team_a_id' => $vympelK,
                'team_b_id' => $iskra,
                'date' => Carbon::now()->addDays(10)->toDateString(),
                'time' => '17:00:00',
                'location' => 'СК "Торпедо"',
                'score' => null
            ],
            [
                'team_a_id' => $lokomotiv,
                'team_b_id' => $pereslavl,
                'date' => Carbon::now()->addDays(12)->toDateString(),
                'time' => '18:30:00',
                'location' => 'СК "ГУОР"',
                'score' => null
            ],
            [
                'team_a_id' => $torpedo,
                'team_b_id' => $vympelV,
                'date' => Carbon::now()->addDays(14)->toDateString(),
                'time' => '19:00:00',
                'location' => 'СК "Торпедо"',
                'score' => null
            ],
            [
                'team_a_id' => $iskra,
                'team_b_id' => $lokomotiv,
                'date' => Carbon::now()->addDays(16)->toDateString(),
                'time' => '16:30:00',
                'location' => 'СК "ГУОР"',
                'score' => null
            ],
        ];
    }
}