<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Room;

class RoomSeeder extends Seeder
{
    public function run(): void
    {
        $rooms = [
            ['room_number' => 'HDL-101', 'type' => 'Standard', 'price' => 500000],
            ['room_number' => 'HDL-201', 'type' => 'Deluxe', 'price' => 750000],
            ['room_number' => 'HDL-301', 'type' => 'Family', 'price' => 1000000],
            ['room_number' => 'HDL-401', 'type' => 'Executive', 'price' => 1250000],
            ['room_number' => 'HDL-501', 'type' => 'Suite', 'price' => 1500000],
        ];

        foreach ($rooms as $room) {
            Room::create([
                'hotel_id' => 1,
                'room_number' => $room['room_number'],
                'type' => $room['type'],
                'price' => $room['price'],
            ]);
        }
    }
}
