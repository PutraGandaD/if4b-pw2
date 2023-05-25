<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        foreach(range(1,99) as $number) {
            Mahasiswa::create([
                'npm' => '21252500' . $number,
                'nama' => fake() -> name(),
                'tanggal_lahir' => fake() -> date($format = 'Y-m-d', $max = 'now'),
                'kota_lahir' => fake() -> state(),
                'foto' => '2125250069.jpg',
                'prodi_id' => '993bf4d7-2435-49f3-9b46-e89db9699dcc',
            ]);
        }

        $this -> call([
            FakultasSeeder::class
        ]);
    }
}
