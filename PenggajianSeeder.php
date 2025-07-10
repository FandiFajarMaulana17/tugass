<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class PenggajianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Contoh data gaji (pastikan employee_id-nya valid)
        DB::table('penggajians')->insert([
            [
                'employee_id'      => 1,
                'periode_awal'     => Carbon::create(2025, 6, 1),
                'periode_akhir'    => Carbon::create(2025, 6, 30),
                'total_gaji'       => '5000000',
                'tanggal_transfer' => Carbon::create(2025, 7, 1),
                'keterangan'       => 'Gaji bulan Juni',
                'status'           => 'dibayar',
                'created_at'       => now(),
                'updated_at'       => now(),
            ],
            [
                'employee_id'      => 2,
                'periode_awal'     => Carbon::create(2025, 6, 1),
                'periode_akhir'    => Carbon::create(2025, 6, 30),
                'total_gaji'       => '4500000',
                'tanggal_transfer' => null,
                'keterangan'       => 'Menunggu approval',
                'status'           => 'belum_dibayar',
                'created_at'       => now(),
                'updated_at'       => now(),
            ]
        ]);
    }
}
