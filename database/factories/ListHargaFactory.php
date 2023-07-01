<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ListHargaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'judul' => $this->faker->sentence(mt_rand(1,1)),
            'kategori' => $this->faker->sentence(mt_rand(1,2)),
            'harga' => mt_rand(20000,50000)
        ];
    }
}
