<?php
namespace Database\Factories\Entities;
use App\Entities\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'price' => $this->faker->randomFloat(2, 1, 10000),
            'quantity' => $this->faker->numberBetween(1, 100) 
        ];
    }
}
