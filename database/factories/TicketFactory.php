<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'created_by_id' => $this->faker->randomElement(User::pluck('id')->toArray()),
            'assigned_to_id' => $this->faker->randomElement(User::pluck('id')->toArray()),
            'subject' => $this->faker->sentence(6),
            'description' => $this->faker->paragraph(6),
            'status' => $this->faker->randomElement(['open', 'closed']),
            'priority' => $this->faker->randomElement(['low', 'medium', 'high']),
        ];
    }
}
