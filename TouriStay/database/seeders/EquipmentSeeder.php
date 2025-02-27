<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\équipement;
class EquipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        équipement::insert([
            ['name' => 'WiFi'],
            ['name' => 'Parking'],
            ['name' => 'Swimming Pool'],
            ['name' => 'climatisation'],
        ]);
    }
}
