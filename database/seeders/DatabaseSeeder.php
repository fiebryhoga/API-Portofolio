<?php

namespace Database\Seeders;

use App\Models\ProjectTag;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            BiodataSeeder::class,
            BlogSeeder::class,
            BlogContentSeeder::class,
            ToolSeeder::class,
            
            ReferenceSeeder::class,
            ReferenceContentSeeder::class,
        ]);
    }
}
