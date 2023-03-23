<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Setting;

class contactController extends Controller
{
    public function index(){

$data['settings']=Setting::first();
return view('front.contact.index')->with($data);

    }
}
