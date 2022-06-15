<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            KecamatanSeeder::class,
            DesaSeeder::class,
            StatusKepemilikanSeeder::class,
            FisikBangunanSeeder::class,
            BentukBangunanSeeder::class,
            SumberDanaBantuanSeeder::class,
            PendapatanKeluargaSeeder::class,
            ]);
    }
}
