<?php

namespace Database\Seeders;

use App\Models\Barang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Barang::created([
            'image' => '1n-black',
            'name' => '1N black',
            'harga' => 150000,
            'categori' => 'HAIR COLOR',
            'rating' => 4
        ]);
        Barang::created([
            'image' => 'colar-pink',
            'name' => 'Colar pink',
            'harga' => 50000,
            'categori' => 'HAIR COLOR',
            'rating' => 4.3
        ]);
        Barang::created([
            'image' => 'jewe-fit-eye-shadow',
            'name' => 'Jewe fit eye shadow',
            'harga' => 50000,
            'categori' => 'HAIR COLOR',
            'rating' => 4.4
        ]);
        Barang::created([
            'image' => 'pewarna-cat-rambut',
            'name' => 'Pewarna cat rambut',
            'harga' => 25000,
            'categori' => 'HAIR COLOR',
            'rating' => 3.9
        ]);
        Barang::created([
            'image' => 'warna-rambut-korea',
            'name' => 'Warna rambut korea',
            'harga' => 50000,
            'categori' => 'HAIR COLOR',
            'rating' => 4.1
        ]);
    }
}
