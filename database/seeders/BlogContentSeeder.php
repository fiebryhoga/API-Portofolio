<?php

namespace Database\Seeders;

use App\Models\BlogContent;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class BlogContentSeeder extends Seeder
{
    public function run()
    {
        BlogContent::insert([
            [
                'id' => 1,
                'blog_id' => 1,
                'judulsub' => 'Pengenalan AI',
                'materi' => '
                    <p>
                        Teknologi kecerdasan buatan (AI) telah mengalami perkembangan pesat dalam beberapa dekade terakhir. <strong>AI</strong> merujuk pada simulasi kecerdasan manusia dalam mesin yang diprogram untuk berpikir seperti manusia dan meniru tindakan mereka. Teknologi ini mencakup berbagai bidang seperti <em>machine learning</em>, <em>natural language processing</em>, dan <em>robotics</em>.
                    </p>
                    <p>
                        Dengan kemajuan ini, AI kini mampu melakukan tugas yang sebelumnya hanya dapat dilakukan oleh manusia, seperti mengendarai mobil, mengenali wajah, dan bahkan berkomunikasi secara alami.
                    </p>
                    <blockquote>
                        "Perkembangan AI telah membuka peluang baru di berbagai industri, dari kesehatan hingga transportasi."
                    </blockquote>
                    <img src="/assets/image/blog/blog1/img2.jpg" alt="AI dalam Rumah Tangga" class="object-cover w-full max-h-52 sm:max-h-72 sm:mb-6 bg-transparent rounded-md">
                ',
                'created_at' => Carbon::create('2024', '05', '22', '16', '30', '35'),
                'updated_at' => Carbon::create('2024', '05', '22', '16', '30', '35'),
            ],
            
        ]);
    }
}
