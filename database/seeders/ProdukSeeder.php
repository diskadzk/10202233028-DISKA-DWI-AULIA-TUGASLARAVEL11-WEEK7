<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produk; // Pastikan ini ada di bagian atas

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Mengisi tabel produk dengan data dummy
        Produk::create([
            'nama' => 'Roti Coklat',
            'stok' => 50,
        ]);

        Produk::create([
            'nama' => 'Kue Keju',
            'stok' => 30,
        ]);

        Produk::create([
            'nama' => 'Donat Stroberi',
            'stok' => 20,
        ]);
    }
}
