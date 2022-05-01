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
            'anggota_id' => mt_rand(1,5),
            'buku_id' => mt_rand(1,5),
            'tanggal_pinjam' => $this->faker->dateTime(),
        ];
    }
}
