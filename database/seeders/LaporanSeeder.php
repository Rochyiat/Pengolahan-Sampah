<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LaporanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('laporans')->insert([
            [
                'tanggal' => now()->format('Y-m-d'),
                'lokasi' => 'Andir',
                'jenis_sampah' => 'Organik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data lainnya sesuai kebutuhan
        ]);
    }
}
