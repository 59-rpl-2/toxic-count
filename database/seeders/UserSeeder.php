<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::insert([
            ['name' => 'Isman'],
            ['name' => 'Fauzi'],
            ['name' => 'Manzy'],
            ['name' => 'Icy Man'],
        ]);
    }
}
