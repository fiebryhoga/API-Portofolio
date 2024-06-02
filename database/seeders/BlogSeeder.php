<?php

namespace Database\Seeders;

use App\Models\Blog;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    public function run()
    {
        Blog::insert([
            [
                'id' => 1,
                'judul' => 'Menyingkap Potensi AI: Teknologi yang Mengubah Kehidupan Sehari-hari',
                'penulis' => 'Dimas Fiebry',
                'deskripsi' => 'Teknologi AI semakin merambah ke berbagai aspek kehidupan manusia...',
                'image' => '/assets/image/blog/blog1/blog1.jpg',
                'tanggal' => Carbon::create('2022', '05', '14'),
                'created_at' => Carbon::create('2024', '05', '22', '16', '30', '35'),
                'updated_at' => Carbon::create('2024', '05', '22', '16', '30', '35'),
            ],
            [
                'id' => 2,
                'judul' => 'Inovasi Teknologi Blockchain: Mengubah Dunia Digital',
                'penulis' => 'Dimas Fiebry',
                'deskripsi' => 'Blockchain bukan hanya tentang cryptocurrency, tetapi juga tentang cara baru untuk mengamankan data dan transaksi di dunia digital...',
                'image' => '/assets/image/blog/blog2/blog2.jpg',
                'tanggal' => Carbon::create('2023', '11', '05'),
                'created_at' => Carbon::create('2024', '05', '29', '11', '00', '00'),
                'updated_at' => Carbon::create('2024', '05', '29', '11', '00', '00'),
            ],
            [
                'id' => 3,
                'judul' => 'Jurus Jitu Agar Tidak Tertidur di Kelas Pagi',
                'penulis' => 'Dimas Fiebry',
                'deskripsi' => 'Bangun pagi memang sulit, tetapi dengan beberapa trik lucu ini, membuat bisa tetap terjaga dan fokus di kelas pagi...',
                'image' => '/assets/image/blog/blog3/blog4.jpg',
                'tanggal' => Carbon::create('2024', '05', '12'),
                'created_at' => Carbon::create('2024', '05', '29', '12', '00', '00'),
                'updated_at' => Carbon::create('2024', '05', '29', '12', '00', '00'),
            ],
            // Tambahkan data lain yang sesuai
        ]);
    }
}
