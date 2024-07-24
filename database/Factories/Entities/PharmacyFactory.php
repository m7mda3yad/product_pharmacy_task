<?php
namespace Database\Factories\Entities;
use App\Entities\Pharmacy;
use Illuminate\Database\Eloquent\Factories\Factory;

class PharmacyFactory extends Factory
{
    protected $model = Pharmacy::class;

    public function definition()
    {
        return [
            'name' => $this->faker->sentence,
            'address' => $this->faker->paragraph
        ];
    }
}
