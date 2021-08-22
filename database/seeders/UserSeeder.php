<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Jon Snow',
            'email' => 'snow@winterfell.com',
            'password' => bcrypt('passw0rd'),
            'is_admin' => 1
        ]);
    }
}
