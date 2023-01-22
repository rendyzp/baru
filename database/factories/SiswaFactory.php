<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "id_mataPelajaran" => $this->faker->regexify('[A-F]'),
            "kelas" => $this->faker->regexify('[A-F]'),
            "NIS" => $this->faker->randomNumber(9, true),
            "name" => $this->faker->name(),
            "absen" => $this->faker->unique->numberBetween($int1 = 1, $int2 = 32),
            "jenisKelamin" => $this->faker->regexify('[LP]'),
        ];
    }
}
