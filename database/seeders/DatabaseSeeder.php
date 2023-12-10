<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Barang;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'sadam',
            'email' => 'sadamoke@gmail.com',
            'password' => bcrypt('sadam'),
            'level' => 'admin'
        ]);

        User::create([
            'name' => 'sadam ps',
            'email' => 'sadam@gmail.com',
            'password' => bcrypt('123'),
            'level' => 'user'
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Barang::create([
            'image' => '1n-black',
            'name' => '1N black',
            'harga' => 150000,
            'category' => 'HAIR-COLOR',
            'rating' => 4
        ]);
        Barang::create([
            'image' => 'colar-pink',
            'name' => 'Colar pink',
            'harga' => 50000,
            'category' => 'HAIR-COLOR',
            'rating' => 4.3
        ]);
        Barang::create([
            'image' => 'jewe-fit-eye-shadow',
            'name' => 'Jewe fit eye shadow',
            'harga' => 50000,
            'category' => 'HAIR-COLOR',
            'rating' => 4.4
        ]);
        Barang::create([
            'image' => 'pewarna-cat-rambut',
            'name' => 'Pewarna cat rambut',
            'harga' => 25000,
            'category' => 'HAIR-COLOR',
            'rating' => 3.9
        ]);
        Barang::create([
            'image' => 'warna-rambut-korea',
            'name' => 'Warna rambut korea',
            'harga' => 50000,
            'category' => 'HAIR-COLOR',
            'rating' => 4.1
        ]);

        Barang::create([
            'image' => 'hydrokeratin-curl',
            'name' => 'hydrokeratin-curl',
            'harga' => 350000,
            'category' => 'HAIR-CARE',
            'rating' => 5.0
        ]);
        Barang::create([
            'image' => 'hydrokeratin-repair-ampoule',
            'name' => 'hydrokeratin-repair-ampoule',
            'harga' => 300000,
            'category' => 'HAIR-CARE',
            'rating' => 4.8
        ]);
        Barang::create([
            'image' => 'intensive-protein-ampoule',
            'name' => 'intensive-protein-ampoule',
            'harga' => 100000,
            'category' => 'HAIR-CARE',
            'rating' => 4.2
        ]);
        Barang::create([
            'image' => 'rebak-style-repain',
            'name' => 'rebak-style-repain',
            'harga' => 45000,
            'category' => 'HAIR-CARE',
            'rating' => 4.0
        ]);
        Barang::create([
            'image' => 'self-up-volume-shampo',
            'name' => 'self-up-volume-shampo',
            'harga' => 250000,
            'category' => 'HAIR-CARE',
            'rating' => 4.2
        ]);
        Barang::create([
            'image' => 'hair-spray-penguat-rambut',
            'name' => 'hair-spray-penguat-rambut',
            'harga' => 75000,
            'category' => 'HAIR-CARE',
            'rating' => 3.5
        ]);

        Barang::create([
            'image' => 'jewel-fit-blusher-blooming-shine',
            'name' => 'jewel-fit-blusher-blooming-shine',
            'harga' => 79000,
            'category' => 'COSMETIKS',
            'rating' => 4.0
        ]);
        Barang::create([
            'image' => 'lip-balm',
            'name' => 'lip-balm',
            'harga' => 30000,
            'category' => 'COSMETIKS',
            'rating' => 3.6
        ]);
        Barang::create([
            'image' => 'ultra-fit-serum-cushion',
            'name' => 'ultra-fit-serum-cushion',
            'harga' => 100000,
            'category' => 'COSMETIKS',
            'rating' => 4.1
        ]);
        Barang::create([
            'image' => 'da-kyung-starter-pack',
            'name' => 'da-kyung-starter-pack',
            'harga' => 95000,
            'category' => 'COSMETIKS',
            'rating' => 4.5
        ]);
        Barang::create([
            'image' => 'face-jennyhouse-beauty',
            'name' => 'face-jennyhouse-beauty',
            'harga' => 50000,
            'category' => 'COSMETIKS',
            'rating' => 4.5
        ]);
        Barang::create([
            'image' => 'jewel-fir-eye-shadow',
            'name' => 'jewel-fir-eye-shadow',
            'harga' => 70000,
            'category' => 'COSMETIKS',
            'rating' => 4.9
        ]);
    }

}
