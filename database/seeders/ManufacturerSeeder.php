<?php

namespace Database\Seeders;

use App\Models\Manufacturer;
use Illuminate\Database\Seeder;

class ManufacturerSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        Manufacturer::factory()->count(5)->create();
    }
}
