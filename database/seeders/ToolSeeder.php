<?php

namespace Database\Seeders;

use App\Models\Tool;
use Illuminate\Database\Seeder;

class ToolSeeder extends Seeder
{
    public function run()
    {
        Tool::create(['id' => 1, 'nama' => 'Html', 'image' => '/assets/image/tools/icons8-html.svg', 'link' => 'https://developer.mozilla.org/en-US/docs/Web/HTML']);
        Tool::create(['id' => 2, 'nama' => 'Css', 'image' => '/assets/image/tools/icons8-css.svg', 'link' => 'https://developer.mozilla.org/en-US/docs/Web/CSS']);
        Tool::create(['id' => 3, 'nama' => 'JS', 'image' => '/assets/image/tools/icons8-javascript.svg', 'link' => 'https://www.javascript.com/']);
        Tool::create(['id' => 4, 'nama' => 'PHP', 'image' => '/assets/image/tools/icons8-php.svg', 'link' => 'https://www.php.net/']);
        Tool::create(['id' => 5, 'nama' => 'MySQL', 'image' => '/assets/image/tools/icons8-mysql.svg', 'link' => 'https://www.mysql.com/']);
        Tool::create(['id' => 6, 'nama' => 'Laravel', 'image' => '/assets/image/tools/laravel.svg', 'link' => 'https://laravel.com/']);
        Tool::create(['id' => 7, 'nama' => 'JavaScript', 'image' => '/assets/image/tools/icons8-javascript.svg', 'link' => 'https://www.javascript.com/']);
        Tool::create(['id' => 8, 'nama' => 'Sass', 'image' => '/assets/image/tools/icons8-sass.svg', 'link' => 'https://sass-lang.com/']);
        Tool::create(['id' => 9, 'nama' => 'Figma', 'image' => '/assets/image/tools/icons8-figma.svg', 'link' => 'https://www.figma.com/']);
        Tool::create(['id' => 10, 'nama' => 'HTML', 'image' => '/assets/image/tools/icons8-html.svg', 'link' => 'https://developer.mozilla.org/en-US/docs/Web/HTML']);
        Tool::create(['id' => 11, 'nama' => 'CSS', 'image' => '/assets/image/tools/icons8-css.svg', 'link' => 'https://developer.mozilla.org/en-US/docs/Web/CSS']);
        Tool::create(['id' => 12, 'nama' => 'Bootstrap', 'image' => '/assets/image/tools/icons8-bootstrap.svg', 'link' => 'https://getbootstrap.com/']);
        Tool::create(['id' => 13, 'nama' => 'Java', 'image' => '/assets/image/tools/java.svg', 'link' => 'https://www.java.com/en/']);
        Tool::create(['id' => 14, 'nama' => 'Next JS', 'image' => '/assets/image/tools/icons8-next.js.svg', 'link' => 'https://nextjs.org']);
        Tool::create(['id' => 15, 'nama' => 'Git', 'image' => '/assets/image/tools/icons8-git.svg', 'link' => 'https://git-scm.com']);
        Tool::create(['id' => 16, 'nama' => 'TypeScript', 'image' => '/assets/image/tools/icons8-typescript.svg', 'link' => 'https://www.typescriptlang.org/']);
        Tool::create(['id' => 17, 'nama' => 'Tailwind', 'image' => '/assets/image/tools/icons8-tailwind-css.svg', 'link' => 'https://tailwindcss.com/']);
    }
}
