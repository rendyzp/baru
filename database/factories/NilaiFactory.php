<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class NilaiFactory extends Factory
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
            "latihanSoal1" => $this->faker->numberBetween($int1 = 40, $int2 = 100),
            "latihanSoal2" => $this->faker->numberBetween($int1 = 40, $int2 = 100),
            "latihanSoal3" => $this->faker->numberBetween($int1 = 40, $int2 = 100),
            "latihanSoal4" => $this->faker->numberBetween($int1 = 40, $int2 = 100),
            "ulanganHarian1" => $this->faker->numberBetween($int1 = 40, $int2 = 100),
            "ulanganHarian2" => $this->faker->numberBetween($int1 = 40, $int2 = 100),
            "ulanganTengahSemester" => $this->faker->numberBetween($int1 = 40, $int2 = 100),
            "ulanganSemester" => $this->faker->numberBetween($int1 = 40, $int2 = 100),
            "nilaiPerMataPelajaran" => "",
        ];
    }
}
