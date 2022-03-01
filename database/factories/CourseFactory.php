<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->sentence();

        return [
            'name' => $name,
            'description' => $this->faker->paragraph(),
            'category' => $this->faker->randomElement(['Backend','Frontend', 'Fullstack']),
            'slug' => Str::slug($name, '-')
        ];
    }
}
