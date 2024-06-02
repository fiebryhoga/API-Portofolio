<?php

namespace Database\Seeders;

use App\Models\ProjectTag;
use Illuminate\Database\Seeder;

class ProjectTagSeeder extends Seeder
{
    public function run()
    {
        ProjectTag::create(['project_id' => 1, 'nameTags' => 'ReactJS']);
        ProjectTag::create(['project_id' => 1, 'nameTags' => 'Tailwind']);
        ProjectTag::create(['project_id' => 1, 'nameTags' => 'Web-App']);
        ProjectTag::create(['project_id' => 1, 'nameTags' => 'JavaScript']);

        ProjectTag::create(['project_id' => 2, 'nameTags' => 'ReactJS']);
        ProjectTag::create(['project_id' => 2, 'nameTags' => 'Tailwind']);
        ProjectTag::create(['project_id' => 2, 'nameTags' => 'JavaScript']);
        ProjectTag::create(['project_id' => 2, 'nameTags' => 'Delevery-food']);

        ProjectTag::create(['project_id' => 3, 'nameTags' => 'php']);
        ProjectTag::create(['project_id' => 3, 'nameTags' => 'tailwind']);
        ProjectTag::create(['project_id' => 3, 'nameTags' => 'UIVerse']);
        ProjectTag::create(['project_id' => 3, 'nameTags' => 'JavaScript']);
        ProjectTag::create(['project_id' => 3, 'nameTags' => 'Real-Time']);
        ProjectTag::create(['project_id' => 3, 'nameTags' => 'Message']);

        ProjectTag::create(['project_id' => 4, 'nameTags' => 'Html']);
        ProjectTag::create(['project_id' => 4, 'nameTags' => 'Css']);
        ProjectTag::create(['project_id' => 4, 'nameTags' => 'JavaScript']);
        ProjectTag::create(['project_id' => 4, 'nameTags' => 'Disability']);
        ProjectTag::create(['project_id' => 4, 'nameTags' => 'Inclusive']);
    }
}
