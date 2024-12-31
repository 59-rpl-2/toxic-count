<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\BadWord;

class UserBadWordSeeder extends Seeder
{
    public function run()
    {
        $userIcyMan = User::where('name', 'Icy Man')->first();
        $userIsman = User::where('name', 'Isman')->first();

        $wordAnjing = BadWord::where('word', 'Anjing')->first();
        $wordBangsat = BadWord::where('word', 'Bangsat')->first();

        $userIcyMan->badWords()->attach($wordBangsat->id, ['count' => 3]);
        $userIsman->badWords()->attach($wordAnjing->id, ['count' => 2]);
    }
}
