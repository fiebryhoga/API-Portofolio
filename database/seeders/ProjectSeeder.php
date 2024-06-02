<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run()
    {
        Project::create([
            'nama' => 'Nutrition Calculator',
            'gambar' => '/assets/image/project/project2.png',
            'deskripsi' => 'Nutrition Calculator Gen - 1 Using React, Data Stored in Json Format in Frontend, then will be developed in the second version',
            'link' => 'https://www.canva.com/design/DAF8L73RLk8/GQ9wQtSScqyqRjJtnYWJhA/edit?utm_content=DAF8L73RLk8&utm_campaign=designshare&utm_medium=link2&utm_source=sharebutton',
        ]);

        Project::create([
            'nama' => 'Bakso - Cak No',
            'gambar' => '/assets/image/project/project4.png',
            'deskripsi' => 'Online Food Delevery Web With React Js',
            'link' => 'https://www.canva.com/design/DAF8L73RLk8/GQ9wQtSScqyqRjJtnYWJhA/edit?utm_content=DAF8L73RLk8&utm_campaign=designshare&utm_medium=link2&utm_source=sharebutton',
        ]);

        Project::create([
            'nama' => 'Chat - App',
            'gambar' => '/assets/image/project/project3.png',
            'deskripsi' => 'Chat App with AJAX',
            'link' => 'https://www.canva.com/design/DAF8L73RLk8/GQ9wQtSScqyqRjJtnYWJhA/edit?utm_content=DAF8L73RLk8&utm_campaign=designshare&utm_medium=link2&utm_source=sharebutton',
        ]);

        Project::create([
            'nama' => 'My First Website - Abilify TV',
            'gambar' => '/assets/image/project/project1.png',
            'deskripsi' => 'my first site using vanilla version html, css, js',
            'link' => 'https://www.canva.com/design/DAF8L73RLk8/GQ9wQtSScqyqRjJtnYWJhA/edit?utm_content=DAF8L73RLk8&utm_campaign=designshare&utm_medium=link2&utm_source=sharebutton',
        ]);
    }
}
