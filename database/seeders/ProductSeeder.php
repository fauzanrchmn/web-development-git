<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'judul' => 'Produk 1',
                'deskripsi' => 'Deskripsi untuk Produk 1',
                'harga' => 10000,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
