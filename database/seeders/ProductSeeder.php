<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Entities\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        // Create 50,000 products in chunks to manage memory usage
        $chunkSize = 1000;
        $totalRecords = 50000;

        for ($i = 0; $i < $totalRecords; $i += $chunkSize) {
            Product::factory()->count($chunkSize)->create();
        }
    }
}

