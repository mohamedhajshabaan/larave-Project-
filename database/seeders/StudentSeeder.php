<?php

namespace Database\Seeders;

use App\Models\Student;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Database\Factories\StudentFactory;


class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

     for($i=1;$i<=5;$i++){
        DB::table('students')->insert([
            'name' => "mohamed $i",
            'email' => 'mohamed@gmail.com',
            'spec' => 'medical',
            'img' => "$i.jpg",


        ]);
    }}}


