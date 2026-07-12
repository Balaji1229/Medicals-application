<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Medicine;
use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Medicine>
 */
class MedicineFactory extends Factory
{
    protected $model = Medicine::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->word() . ' ' . $this->faker->randomNumber(3),
            'generic_name' => $this->faker->words(2, true),
            'category_id' => Category::factory(),
            'supplier_id' => Supplier::factory(),
            'unit' => $this->faker->randomElement(['pcs', 'box', 'bottle', 'strip']),
            'price' => $this->faker->randomFloat(2, 5, 500),
            'stock_quantity' => $this->faker->numberBetween(0, 100),
            'expiry_date' => $this->faker->dateTimeBetween('now', '+2 years'),
            'description' => $this->faker->sentence(),
        ];
    }
}
