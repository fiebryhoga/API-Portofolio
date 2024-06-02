<?php

namespace Database\Seeders;

use App\Models\Biodata;
use Illuminate\Database\Seeder;

class BiodataSeeder extends Seeder
{
    public function run()
    {
        Biodata::create([
            'gretting' => 'Hello!',
            'name' => 'John Doe',
            'job' => 'Software Developer',
            'description' => 'A passionate developer.',
            'image' => '/assets/image/biodata/johndoe.png',
            'contact' => '123456789',
            'quote' => 'Coding is fun!',
            'descriptionQuote' => 'Always code as if the guy who ends up maintaining your code will be a violent psychopath who knows where you live.',
            'linkAnonymous' => 'https://anonymous.link',
            'linkedin' => 'JohnDoe',
            'dribble' => 'JohnDoe',
            'github' => 'JohnDoe',
            'instagram' => 'JohnDoe',
            'twitter' => 'JohnDoe',
            'email' => 'john.doe@example.com',
            'linkLinkedin' => 'https://linkedin.com/in/johndoe',
            'linkDribble' => 'https://dribble.com/johndoe',
            'linkGithub' => 'https://github.com/johndoe',
            'linkInstagram' => 'https://instagram.com/johndoe',
            'linkTwitter' => 'https://twitter.com/johndoe',
            'linkEmail' => 'mailto:john.doe@example.com',
        ]);
    }
}
