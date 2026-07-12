<?php

namespace Database\Factories;

use App\Models\Department;
use App\Models\Doctor;
use App\Models\Token;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Token>
 */
class TokenFactory extends Factory
{
    protected $model = Token::class;

    public function definition(): array
    {
        $department = Department::factory()->create();

        return [
            'token_no' => 'TKN-' . strtoupper($this->faker->bothify('########')),
            'patient_name' => $this->faker->name(),
            'phone' => $this->faker->phoneNumber(),
            'email' => $this->faker->safeEmail(),
            'department_id' => $department->id,
            'doctor_id' => Doctor::factory()->create(['department_id' => $department->id])->id,
            'status' => $this->faker->randomElement(['waiting', 'in-progress', 'completed', 'skipped']),
        ];
    }
}
