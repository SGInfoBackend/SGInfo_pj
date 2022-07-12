<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'Job_title' => $this->faker->title(10),
            'Company' => $this->faker->name(10),
            'SALARY' => $this->faker->randomDigit(1000, true),
            'Job_location' => $this->faker->address(10),
            'Category_job' => $this->faker->title(10),
            'Company_URL' => $this->faker->text(10),
            'Job_Description' => $this->faker->paragraph(),
        ];
    }
}
