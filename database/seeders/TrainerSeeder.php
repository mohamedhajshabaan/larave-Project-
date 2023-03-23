<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use App\Models\Trainer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('trainers')->insert([
            'name'=>'mohamed',
            'email'=>'mohamed@gmail.com',
            'spec'=>'medical',
            'img'=>'1.jpg'

   ]);

        DB::table('Trainers')->insert([
            'name'=>'sami',
            'email'=>'mohamed@gmail.com',
            'spec'=>'IT',
            'img'=>'2.jpg'

        ]);

        DB::table('Trainers')->insert([
            'name'=>'ali',
            'email'=>'mohamed@gmail.com',
            'spec'=>'doctor',
            'img'=>'3.jpg'

        ]);
    }
}
