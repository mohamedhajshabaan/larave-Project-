<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=1;$i<=3;$i++){
            DB::table('tests')->insert([
                'name' => "mohamed $i",
                'spec' => 'IT',
                'desc' => "this is very  good trainer ",
                'img' => "$i.jpg"


            ]);
    }}
}
