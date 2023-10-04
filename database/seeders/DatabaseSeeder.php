<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Role;
use App\Models\User;
use App\Models\Rute;
use App\Models\Sewa;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('details')->insert([
            'nama_mobil' => 'Brio',
            'harga' => 300000, // Menghapus tanda kutip
            'bahan_bakar' => 'Bensin',
            'jumlah_kursi' => 5, // Menghapus tanda kutip
            'penumpang' => 5, // Menghapus tanda kutip
            'tahun' => 2021, // Menghapus tanda kutip
            'transmisi' => 'Manual',
            'fasilitas' => 'AC',
        ]);
        DB::table('details')->insert([
            'nama_mobil' => 'Innova Reborn',
            'harga' => 500000, // Menghapus tanda kutip
            'bahan_bakar' => 'Bensin',
            'jumlah_kursi' => 8, // Menghapus tanda kutip
            'penumpang' => 8, // Menghapus tanda kutip
            'tahun' => 2022, // Menghapus tanda kutip
            'transmisi' => 'Manual',
            'fasilitas' => 'AC',
        ]);
        DB::table('details')->insert([
            'nama_mobil' => 'Avanza',
            'harga' => 300000, // Menghapus tanda kutip
            'bahan_bakar' => 'Bensin',
            'jumlah_kursi' => 8, // Menghapus tanda kutip
            'penumpang' => 8, // Menghapus tanda kutip
            'tahun' => 2019, // Menghapus tanda kutip
            'transmisi' => 'Manual',
            'fasilitas' => 'AC',
        ]);
        DB::table('details')->insert([
            'nama_mobil' => 'Agya',
            'harga' => 300000, // Menghapus tanda kutip
            'bahan_bakar' => 'Bensin',
            'jumlah_kursi' => 5, // Menghapus tanda kutip
            'penumpang' => 5, // Menghapus tanda kutip
            'tahun' => 2019, // Menghapus tanda kutip
            'transmisi' => 'Manual',
            'fasilitas' => 'AC',
        ]);
        DB::table('details')->insert([
            'nama_mobil' => 'Hiace',
            'harga' => 1400000, // Menghapus tanda kutip
            'bahan_bakar' => 'Bensin',
            'jumlah_kursi' => 16, // Menghapus tanda kutip
            'penumpang' => 16, // Menghapus tanda kutip
            'tahun' => 2019, // Menghapus tanda kutip
            'transmisi' => 'Manual',
            'fasilitas' => 'AC',
        ]);
        DB::table('details')->insert([
            'nama_mobil' => 'Fortuner',
            'harga' => 1500000, // Menghapus tanda kutip
            'bahan_bakar' => 'Bensin',
            'jumlah_kursi' => 8, // Menghapus tanda kutip
            'penumpang' => 8, // Menghapus tanda kutip
            'tahun' => 2019, // Menghapus tanda kutip
            'transmisi' => 'Manual',
            'fasilitas' => 'AC',
        ]);
        DB::table('details')->insert([
            'nama_mobil' => 'Alpard',
            'harga' => 3500000, // Menghapus tanda kutip
            'bahan_bakar' => 'Bensin',
            'jumlah_kursi' => 6, // Menghapus tanda kutip
            'penumpang' => 6, // Menghapus tanda kutip
            'tahun' => 2021, // Menghapus tanda kutip
            'transmisi' => 'Manual',
            'fasilitas' => 'AC',
        ]);
        DB::table('details')->insert([
            'nama_mobil' => 'New Avanza',
            'harga' => 350000, // Menghapus tanda kutip
            'bahan_bakar' => 'Bensin',
            'jumlah_kursi' => 8, // Menghapus tanda kutip
            'penumpang' => 8, // Menghapus tanda kutip
            'tahun' => 2022, // Menghapus tanda kutip
            'transmisi' => 'Manual',
            'fasilitas' => 'AC',
        ]);

        DB::table('kontaks')->insert([
            'nama' => 'Lintang Karenina',
            'email' => 'lintangkarenina@gmail.com',
            'subjek' => 'Bisa kah jemput didaerah nanga pinoh?',
            'pesan' => 'Semoga dapat jawaban',
        ]);

        Role::create([
            'name' => 'admin',
        ]);
        Role::create([
            'name' => 'pengunjung'
        ]);

        DB::table('testimonis')->insert([
            'user_id' => 2,
            'pesan' => 'Senang bisa bekerja sama dengan MTRentcar',
        ]);

        User::create([
            'role_id' => 1,
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('tutiyuliarti'),
            'alamat' => 'Jalan Wonobaru Gang Wonodadi 1 no 28 W',
            'kota' => 'Pontianak',
            'pekerjaan' => 'Mahasiswa',
            'upload_ktp' => 'Gambar',
            'upload_sim' => 'Gambar',
        ]);

        User::create([
            'role_id' => 2,
            'name' => 'Lintang Karenina',
            'email' => 'lintangkarenina@gmail.com',
            'password' => Hash::make('tutiyuliarti'),
            'alamat' => 'Jalan Wonobaru Gang Wonodadi 1 no 28 W',
            'kota' => 'Pontianak',
            'pekerjaan' => 'Mahasiswa',
            'upload_ktp' => 'Gambar',
            'upload_sim' => 'Gambar',
        ]);


        Rute::create([
            'rute' => 'Singkawang',
            'hari' => '1 Hari',
        ]);
        Rute::create([
            'rute' => 'Karangan',
            'hari' => '1 Hari',
        ]);
        Rute::create([
            'rute' => 'Tayan',
            'hari' => '1 Hari',
        ]);
        Rute::create([
            'rute' => 'Sosok',
            'hari' => '1 Hari',
        ]);
        Rute::create([
            'rute' => 'Ngabang',
            'hari' => '1 Hari',
        ]);
        Rute::create([
            'rute' => 'Bengakayang',
            'hari' => '2 Hari',
        ]);
        Rute::create([
            'rute' => 'Sambas',
            'hari' => '2 Hari',
        ]);
        Rute::create([
            'rute' => 'Balai Bekuak',
            'hari' => '2 Hari',
        ]);
        Rute::create([
            'rute' => 'Serimbu',
            'hari' => '2 Hari',
        ]);
        Rute::create([
            'rute' => 'Darit',
            'hari' => '2 Hari',
        ]);
        Rute::create([
            'rute' => 'Meliau',
            'hari' => '2 Hari',
        ]);
        Rute::create([
            'rute' => 'Sanggau',
            'hari' => '2 Hari',
        ]);
        Rute::create([
            'rute' => 'Entikong',
            'hari' => '2 Hari',
        ]);
        Rute::create([
            'rute' => 'Seluas',
            'hari' => '3 Hari',
        ]);
        Rute::create([
            'rute' => 'Aruk',
            'hari' => '3 Hari',
        ]);
        Rute::create([
            'rute' => 'Sandi',
            'hari' => '3 Hari',
        ]);
        Rute::create([
            'rute' => 'Sekadau',
            'hari' => '3 Hari',
        ]);
        Rute::create([
            'rute' => 'Sintang',
            'hari' => '3 Hari',
        ]);
        Rute::create([
            'rute' => 'Melawi',
            'hari' => '3 Hari',
        ]);
        Rute::create([
            'rute' => 'Semitau',
            'hari' => '4 Hari',
        ]);
        Rute::create([
            'rute' => 'Nanga Tayap',
            'hari' => '4 Hari',
        ]);
        Rute::create([
            'rute' => 'Putussibau',
            'hari' => '4 Hari',
        ]);
        Rute::create([
            'rute' => 'Ketapang',
            'hari' => '5 Hari',
        ]);
        Rute::create([
            'rute' => 'Sukadana',
            'hari' => '5 Hari',
        ]);
        Rute::create([
            'rute' => 'Air Upas',
            'hari' => '5 Hari',
        ]);
        Rute::create([
            'rute' => 'Badau',
            'hari' => '5 Hari',
        ]);
        Rute::create([
            'rute' => 'Khusus Di Luar Kalimantan Barat',
            'hari' => '7 Hari',
        ]);

    }
}
