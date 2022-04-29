<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AnggotaModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_anggota' => $this->faker->name(),
            'kelas' => $this->faker->randomDigit(),
            'jurusan' => $this->faker->jobTitle(),
            'alamat' => $this->faker->streetAddress(),
        ];
    }
}
