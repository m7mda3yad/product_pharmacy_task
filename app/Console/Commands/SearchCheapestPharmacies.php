<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Entities\Product;

class SearchCheapestPharmacies extends Command
{
    protected $signature = 'products:search-cheapest {productId}';
    protected $description = 'Get the cheapest 5 pharmacies for a given product in JSON format';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $productId = $this->argument('productId');

        $product = Product::with(['pharmacies' => function($query) {
            $query->orderBy('pivot_price', 'asc')->take(5);
        }])->find($productId);

        if (!$product) {
            $this->error('Product not found.');
            return;
        }

        $pharmacies = $product->pharmacies->map(function($pharmacy) {
            return [
                'id' => $pharmacy->id,
                'name' => $pharmacy->name,
                'price' => $pharmacy->pivot->price
            ];
        });

        $this->info($pharmacies->toJson(JSON_PRETTY_PRINT));
    }
}
