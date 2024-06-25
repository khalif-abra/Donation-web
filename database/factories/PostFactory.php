<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2,10)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->sentence(mt_rand(26,28)),
            // 'body' => '<p>' . implode('<p></p>',$this->faker->paragraphs(mt_rand(5,10))) . '</p>',
            'body' => collect($this->faker->paragraphs(mt_rand(20,40)))->map(fn($p) => "<p>$p</p>")->implode(''),
            'user_id' => mt_rand(1,7),
            'category_id' => mt_rand(1,5)
        ];
    }
}
