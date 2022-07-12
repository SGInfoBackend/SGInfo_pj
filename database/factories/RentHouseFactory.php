<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class RentHouseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'PROJECT_NAME' => $this->faker->text(10),
            'Project_type' => $this->faker->text(10),
            'Floor_lvl' => $this->faker->text(5),
            'Floor_Size' => $this->faker->text(10),
            'RH_Nearest_MRT_LRT' => $this->faker->text(10),
            'RH_MRT_LRT_Line' => $this->faker->text(10),
            'ADDRESS' => $this->faker->address(),
            'DEVELOPER' => $this->faker->text(10),
            'SPF' => $this->faker->text(10),
            'Avaliable_From' => $this->faker->country(),
            'PRICE_MIN' => $this->faker->randomDigit(),
            'PRICE_MAX' => $this->faker->randomDigit(),
            'No_Room' => $this->faker->numberBetween(1,10),
            'No_Birthroom' => $this->faker->numberBetween(1,10),
            'No_Toilet' => $this->faker->numberBetween(1,10),
            'Cooking_Allow' => $this->faker->boolean(),
            'RH_Description' => $this->faker->paragraph(),
        ];
    }
}
