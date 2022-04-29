<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PengembalianModelFactory extends Factory
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
            'peminjaman_id' => $this->faker->numberBetween(1, 10),
            'tanggal_kembali' => $this->faker->dateTime(),
        ];
    }
}
