<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Hotel;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Hotel::create([
            'name' => 'Hotel Del Luna',
            'address' => 'Seoul, Korea Selatan',
            'description' => 'Hotel terbaik dengan pemandangan bulan yang indah.',
        ]);
    }
}
