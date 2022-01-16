<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::create(['title' => 'Welcome Page', 'content' => 'Welcome page content']);
        Page::create(['title' => 'Consultation Page', 'content' => 'Consultation page content']);
    }
}
