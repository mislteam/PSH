<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Faq>
 */
class FaqFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "question" => $this->faker->sentence(4),
            "answer" => $this->faker->paragraph(4), 
            "status"  => $this->faker->randomElement([0, 1]),
        ];
    }
}
