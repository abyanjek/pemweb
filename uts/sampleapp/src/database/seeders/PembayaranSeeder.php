<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class PembayaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pembayarans')->insert([
            [
                'produk' => 'Uang Mainan',
                'metode_pembayaran' => 'Transfer Bank',
                'jumlah_bayar' => 150000,
                'status_pembayaran' => 'lunas',
                'tanggal_pembayaran' => Carbon::now()->subDays(2),
                'deskripsi' => 'Pembayaran via transfer bank BCA',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'produk' => 'Mainan Edukatif',
                'metode_pembayaran' => 'Cash',
                'jumlah_bayar' => 75000,
                'status_pembayaran' => 'pending',
                'tanggal_pembayaran' => Carbon::now()->subDay(),
                'deskripsi' => 'Pembayaran tunai langsung',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
