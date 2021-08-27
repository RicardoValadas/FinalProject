<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionLevelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questionlevel')->insert([
            [
                'id' => 1,
                'level' => 'easy',
            ],
            [
                'id' => 2,
                'level' => 'medium',
            ],
            [
                'id' => 3,
                'level' => 'hard',
            ]
        ]);
    }
}
