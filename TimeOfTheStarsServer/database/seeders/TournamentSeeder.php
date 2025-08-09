<?php

namespace Database\Seeders;

use App\Models\Tournament;
use Illuminate\Database\Seeder;

class TournamentSeeder extends Seeder
{
    public function run(): void
    {
        Tournament::create([
            'name' => 'Tovarisheski turnir',
            'start_date' => '2025-04-09',
            'end_date' => '2025-01-10',
            'location' => 'СК "Торпедо"',
        ]);
        Tournament::create([
            'name' => 'Victory Cup',
            'start_date' => '2025-01-05',
            'end_date' => '2025-04-05',
            'location' => 'СК "ГУОР"',
        ]);
    }
}
