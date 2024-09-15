<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Stand;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'model_name' => fake()->randomElement(['A4', 'Class A 4matic AMG', 'LS500', 'Megane 1.8', 'Golf GTI', 'Clio 1.4', 'Panda', 'Class E', 'EQS', 'GLS' , 'GS600', 'LC500h', 'RC F', 'Punto', 'CT200h']),
            'brand_id' => Brand::factory(),
            'stand_id' => Stand::factory(),
            'image' => fake()->imageUrl(415,250),
            'price' => fake()->numberBetween(2000, 100000),
            'url' => fake()->url(),
            'featured' => 'false',
        ];
    }
}
