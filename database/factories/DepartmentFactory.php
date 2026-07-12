<?php

namespace Database\Factories;

use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Department>
 */
class DepartmentFactory extends Factory
{
    protected $model = Department::class;

    private static $departmentNames = [
        'General Medicine',
        'Cardiology',
        'Pediatrics',
        'Orthopedics',
        'Dermatology',
        'ENT',
        'Dental',
        'Physiotherapy',
    ];

    public function definition(): array
    {
        $name = array_shift(self::$departmentNames) ?? $this->faker->word();

        return [
            'name' => $name,
            'code' => strtoupper(substr($name, 0, 3)) . $this->faker->unique()->randomNumber(2),
            'description' => $this->faker->sentence(),
            'is_active' => true,
        ];
    }
}
