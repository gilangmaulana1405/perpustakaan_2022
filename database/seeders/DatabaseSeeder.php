<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PeminjamanModel;
use App\Models\AnggotaModel;
use App\Models\BukuModel;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        PeminjamanModel::factory(20)->create();
        AnggotaModel::factory(10)->create();
        BukuModel::factory(10)->create();
    }
}
