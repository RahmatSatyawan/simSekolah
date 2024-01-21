<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kelas;
use Faker\Factory as Faker;

class KelasSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        $data = [
            ['nama_kelas' => 'Kelas A'],
            ['nama_kelas' => 'Kelas B'],
            ['nama_kelas' => 'Kelas C'],
            // Tambahkan data lainnya sesuai kebutuhan
        ];

        Kelas::insert($data);
    }
}
