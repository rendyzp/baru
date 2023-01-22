<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class KelasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "namaKelas" => $this->faker->unique->regexify('[A-F]'),
            "dayaTampung" => $this->faker->numberBetween($int1 = 30, $int2 = 35),
            "jumlahLakiLaki" => $this->faker->numberBetween($int1 = 10, $int2 = 20),
            "jumlahPerempuan" => $this->faker->numberBetween($int1 = 10, $int2 = 20),
        ];
    }
}
