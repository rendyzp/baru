<?php

namespace Database\Seeders;

use App\Models\Kelas;
use App\Models\Nilai;
use App\Models\Siswa;
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
        Kelas::factory(6)->create();
        Siswa::factory(32)->create();
        Nilai::factory(32)->create();
    }
}
