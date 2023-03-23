<?php

namespace App\Http\Controllers\front;
use App\Http\Controllers\Controller;
use App\Models\course;
use App\Models\Test;
use App\Models\Trainer;
use App\Models\Student;

use Illuminate\Http\Request;

class homepagecontroller extends Controller
{
    public function index(){
        $data['courses']=course::select('id','name','small_desc','cat_id','trainer_id','img','price')
            ->orderBy('id','desc')->take(3)->get();
        $data['courses_count']=course::count();
        $data['trainers_count']=Trainer::count();
        $data['students_count']=Student::count();

        $data['tests']=Test::select('spec','name','desc','img')->get();
        return view('front\layout\index')->with($data);

    }
}
