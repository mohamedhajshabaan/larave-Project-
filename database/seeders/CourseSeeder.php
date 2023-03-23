<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;


class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 3; $i++) {
            for ($j = 1; $j <= 6; $j++) {

                DB::table('courses')->insert([


                    'cat_id' => "$i",
                    'trainer_id' => rand(1, 5),
                    'name' => "course num $i cat num $j",
                    'small_desc' => 'With dnce, no oram Technologies aging our',
                    'desc' => 'oday, with our Ldat on your maintenance investment.',
                    'price' => rand(100, 300),
                    'img' => "$i$j.png",

                ]);
            }
        }


    }
}
