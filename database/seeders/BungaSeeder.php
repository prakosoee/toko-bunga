<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Bunga;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class BungaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bunga::truncate();
        Bunga::insert([
            "nama" => "Mawar",
            "keterangan" => "Warna Putih, Merah, dan Kuning",
            "harga" => 30000,
            "stok" => 20,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        // $data = [
        //     [
        //         "nama" => "Mawar",
        //         "keterangan" => "Warna Putih, Merah, dan Kuning",
        //         "harga" => 30000,
        //         "stok" => 20,
        //         "created_at" => Carbon::now(),
        //         "updated_at" => Carbon::now(),
        //     ],
        //     [
        //         "nama" => "Lavender",
        //         "keterangan" => "Warna Biru, Hijau, dan Putih",
        //         "harga" => 25000,
        //         "stok" => 15,
        //         "created_at" => Carbon::now(),
        //         "updated_at" => Carbon::now(),
        //     ],
        //     [
        //         "nama" => "Ginseng",
        //         "keterangan" => "Warna Merah, Ungu, dan Coklat",
        //         "harga" => 40000,
        //         "stok" => 10,
        //         "created_at" => Carbon::now(),
        //         "updated_at" => Carbon::now(),
        //     ],
        // ];

        // menambahkan data ke tabel Bunga menggunakan insertBatch()
        // Bunga::insertBatch($data);

        // Bunga::factory()->count($data)->create();
    }
}