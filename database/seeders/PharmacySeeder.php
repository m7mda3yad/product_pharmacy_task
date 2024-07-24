<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Entities\Pharmacy;

class PharmacySeeder extends Seeder
{
    public function run()
    {
        $chunkSize = 1000;
        $totalRecords = 20000;

        for ($i = 0; $i < $totalRecords; $i += $chunkSize) {
            Pharmacy::factory()->count($chunkSize)->create();
        }
    }
}

