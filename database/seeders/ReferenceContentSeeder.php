<?php

namespace Database\Seeders;

use App\Models\ReferenceContent;
use Illuminate\Database\Seeder;

class ReferenceContentSeeder extends Seeder
{
    public function run()
    {
        ReferenceContent::create(['reference_id' => 1, 'title' => 'Brawijaya University', 'link' => 'https://google.com']);
        ReferenceContent::create(['reference_id' => 1, 'title' => 'Computer Science Faculty', 'link' => 'https://google.com']);
        ReferenceContent::create(['reference_id' => 1, 'title' => 'Computer Science Education', 'link' => 'https://google.com']);

        ReferenceContent::create(['reference_id' => 2, 'title' => 'Build With Angga', 'link' => 'https://google.com']);
        ReferenceContent::create(['reference_id' => 2, 'title' => 'Web Programming Unpas', 'link' => 'https://google.com']);
        ReferenceContent::create(['reference_id' => 2, 'title' => 'Dea Afrizal', 'link' => 'https://google.com']);

        ReferenceContent::create(['reference_id' => 3, 'title' => 'Gmail', 'link' => 'https://google.com']);
        ReferenceContent::create(['reference_id' => 3, 'title' => 'Whatsapp', 'link' => 'https://google.com']);
        ReferenceContent::create(['reference_id' => 3, 'title' => 'Telephone', 'link' => 'https://google.com']);

        ReferenceContent::create(['reference_id' => 4, 'title' => 'Malang, Lowokwaru, 64451', 'link' => 'https://google.com']);
        ReferenceContent::create(['reference_id' => 4, 'title' => 'Gresik, Dukun, 41121', 'link' => 'https://google.com']);
        ReferenceContent::create(['reference_id' => 4, 'title' => 'Kost Putra Padme Biru - Malang', 'link' => 'https://google.com']);
    }
}
