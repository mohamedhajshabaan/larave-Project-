<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\cat;
use App\Models\course;
use Illuminate\Http\Request;

class coursecontroller extends Controller
{
    public function cat ($id){
   $data['cat']=Cat::findOrFail($id);
   $data['courses']=Course::where('cat_id',$id)->paginate(3);


   return view('front.courses.cat')->with($data);

    }


    public function show($id,$c_id){
        $data['courses']=Course::findOrFail($c_id);
        return view('front.courses.show')->with($data);

    }
}
