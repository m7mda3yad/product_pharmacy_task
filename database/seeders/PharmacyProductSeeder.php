<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Entities\Product;
use App\Entities\Pharmacy;
use Illuminate\Support\Facades\DB;

class PharmacyProductSeeder extends Seeder
{
    public function run()
    {
        // Get all products
        $products = Product::all();

        // Check if there are at least 20 pharmacies
        $pharmacyCount = Pharmacy::count();
        if ($pharmacyCount < 20) {
            $this->command->info('Not enough pharmacies to assign 20 to each product.');
            return;
        }

        // Attach each product to 20 random pharmacies with random prices
        $products->each(function ($product) {
            $randomPharmacies = Pharmacy::inRandomOrder()->take(20)->get();

            $randomPharmacies->each(function ($pharmacy) use ($product) {
                DB::table('pharmacy_product')->insert([
                    'pharmacy_id' => $pharmacy->id,
                    'product_id' => $product->id,
                    'price' => rand(100, 10000) / 100, // Random price between 1.00 and 100.00
                ]);
            });
        });
    }
}
