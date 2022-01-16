<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence(4,true);
        $date_published = $this->faker->dateTimeBetween('-30 Days', '+30 days');

        return [
            'title' => $title,
            'date_published' => $date_published,
        ];
    }
}
