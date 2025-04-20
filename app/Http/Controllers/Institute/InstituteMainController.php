<?php

namespace App\Http\Controllers\Institute;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InstituteMainController extends Controller
{
    public function index (){
        return view('institute.dashboard');


    }

    public function institute_settings (){
        return view('institute.institute_settings');

    }


    public function institute_profile (){
        return view('institute.profile.institute_profile');

    }
}
