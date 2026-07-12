<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Sale;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Sale>
 */
class SaleFactory extends Factory
{
    protected $model = Sale::class;

    public function definition(): array
    {
        $total = $this->faker->randomFloat(2, 50, 1000);
        $discount = $this->faker->randomFloat(2, 0, $total * 0.2);

        return [
            'invoice_no' => 'INV-' . strtoupper($this->faker->bothify('########')),
            'customer_id' => Customer::factory(),
            'user_id' => User::factory(),
            'total_amount' => $total,
            'discount' => $discount,
            'grand_total' => max(0, $total - $discount),
            'sale_date' => $this->faker->dateTimeBetween('-30 days', 'now'),
        ];
    }
}
