<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Domain>
 */
class DomainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'body' =>
            '<meta name=\"keywords\" content=\'' . fake()->words($nb = 3, $asText = true) . '\'>' .
            '<meta name=\"description\" content=\'' . fake()->text($maxNbChars = 200) . '\'>' .
            '<h1>' . fake()->paragraph() . '</h1>'
        ];
    }
}
