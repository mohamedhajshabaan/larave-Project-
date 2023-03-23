<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\NewsLetter;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    public function NewsLetter(Request $request){
   $data=$request->validate([
       'email'=>'required|email|max:25'
   ]);
   NewsLetter::created($data);

   return back();

    }

    public function contact(Request $request){
        $data=$request->validate([
            'name'=>'required|string|max:191',
            'subject'=>'nullable|string|max:191',
            'message'=>'required|string',
            'email'=>'required|email|max:25'
        ]);
        Message::created($data);

        return back();

    }

    public function enroll(Request $request){
        $data=$request->validate([
            'name'=>'nullable|string|max:191',
            'spec'=>'nullable|string|max:191',
            'message'=>'required|string',
            'course_id'=>'required|exists:courses,id',
        ]);
   $student=Student::create([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'spec'=>$data['spec'],

        ]);
      $student_id=$student->id;


        DB::table('courses')->insert([


            'course_id' => $data['course_id'],
            'student_id' => $student_id,]);


        return back();

    }
}
