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
            'kelas' => mt_rand(1,5),
            'jurusan' => $this->faker->jobTitle(),
            'alamat' => $this->faker->streetAddress(),
        ];
    }
}
