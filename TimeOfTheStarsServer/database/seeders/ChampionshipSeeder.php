<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Championship;
use Illuminate\Database\Seeder;

class ChampionshipSeeder extends Seeder  
{
    public function run(): void
    {
        Championship::create([
            'name' => 'Zvezda Otechestva',
            'start_date' => '2025-09-10',
            'end_date' => '2025-04-13',  
            'location' => 'СК "Торпедо"',
            'created_at' => now(),      
            'updated_at' => now(),
        ]);
    }
}