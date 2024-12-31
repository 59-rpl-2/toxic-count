<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BadWord;

class BadWordSeeder extends Seeder
{
    public function run()
    {
        BadWord::insert([
            ['word' => 'Anjing'],
            ['word' => 'Monyet'],
            ['word' => 'Bangsat'],
            ['word' => 'Bego'],
        ]);
    }
}
