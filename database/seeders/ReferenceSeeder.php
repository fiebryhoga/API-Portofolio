<?php

namespace Database\Seeders;

use App\Models\Reference;
use Illuminate\Database\Seeder;

class ReferenceSeeder extends Seeder
{
    public function run()
    {
        Reference::create(['title' => 'Organization']);
        Reference::create(['title' => 'Resource']);
        Reference::create(['title' => 'Contact']);
        Reference::create(['title' => 'Locations']);
    }
}
