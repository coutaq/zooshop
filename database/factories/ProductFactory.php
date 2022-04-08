<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\Subcategory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(4),
            'description' => $this->faker->text,
            'price' => $this->faker->randomFloat(2, 0, 999999.99),
            'discount' => $this->faker->randomFloat(2, 0, 999999.99),
            'amount' => $this->faker->randomNumber,
            'image' => $this->faker->imageUrl(640, 480, 'animals', true),
            'subcategory_id' => Subcategory::inRandomOrder()->first()->id,
        ];
    }
}
