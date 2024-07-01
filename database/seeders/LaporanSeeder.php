<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LaporanSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('laporans')->insert([
            [
                'tanggal' => now()->subDays(10)->format('Y-m-d'),
                'lokasi' => 'Lokasi A',
                'jenis' => 'Organik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tanggal' => now()->subDays(5)->format('Y-m-d'),
                'lokasi' => 'Lokasi B',
                'jenis' => 'Non Organik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tanggal' => now()->subDays(1)->format('Y-m-d'),
                'lokasi' => 'Lokasi C',
                'jenis' => 'Bahaya',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
