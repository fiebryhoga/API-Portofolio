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
            'name' => 'Dimasfiebry',
            'job' => 'Software Developer',
            'description' => 'A passionate developer.',
            'image' => '/assets/image/biodata/Dimasfiebry.png',
            'contact' => '123456789',
            'quote' => 'Coding is fun!',
            'descriptionQuote' => 'Always code as if the guy who ends up maintaining your code will be a violent psychopath who knows where you live.',
            'linkAnonymous' => 'https://anonymous.link',
            'linkedin' => 'Dimasfiebry',
            'dribble' => 'Dimasfiebry',
            'github' => 'Dimasfiebry',
            'instagram' => 'Dimasfiebry',
            'twitter' => 'JohnDoe',
            'email' => 'john.doe@example.com',
            'linkLinkedin' => 'https://linkedin.com/in/Dimasfiebry',
            'linkDribble' => 'https://dribble.com/Dimasfiebry',
            'linkGithub' => 'https://github.com/Dimasfiebry',
            'linkInstagram' => 'https://instagram.com/Dimasfiebry',
            'linkTwitter' => 'https://twitter.com/Dimasfiebry',
            'linkEmail' => 'mailto:Dimasfiebry@gmail.com',
        ]);
    }
}
