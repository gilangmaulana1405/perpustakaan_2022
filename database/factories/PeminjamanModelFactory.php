<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PeminjamanModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'anggota_id' => $this->faker->numberBetween(1, 10),
            'buku_id' => $this->faker->numberBetween(1, 10),
            'tanggal_pinjam' => $this->faker->dateTime(),
        ];
    }
}
