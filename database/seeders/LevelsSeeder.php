<?php

namespace Database\Seeders;

use App\Models\Levels;
use Illuminate\Database\Seeder;

class LevelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $levelArr = ['1', '2', '3', '4'];
        for ($i = 1; $i <= 4; $i++) {
            $level = new Levels;
            $level->level = $i;
            $level->save();
    }
    }
}
