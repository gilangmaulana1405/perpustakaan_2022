<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BukuModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'judul' => $this->faker->word(),
            'kategori' => $this->faker->word(),
            'penulis' => $this->faker->name(),
            'penerbit' => $this->faker->company(),
            'tahun_terbit' => $this->faker->year(),
            'jumlah_buku' => mt_rand(1,5),
        ];
    }
}
