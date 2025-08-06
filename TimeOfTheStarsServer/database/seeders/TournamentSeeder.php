<?php

namespace Database\Seeders;

use App\Models\Tournament;
use Illuminate\Database\Seeder;

class TournamentSeeder extends Seeder
{
    public function run(): void
    {
        Tournament::create([
            'name' => 'Champions Cup',
            'start_date' => '2025-08-01',
            'end_date' => '2025-08-10',
            'location' => 'Amsterdam',
        ]);
    }
}
