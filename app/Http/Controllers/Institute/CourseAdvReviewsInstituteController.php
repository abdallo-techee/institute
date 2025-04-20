<?php

namespace App\Http\Controllers\Institute;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseAdvReviewsInstituteController extends Controller
{
    //
    public function index(){
        return view('institute.course_adv_review.course_adv_review');
    }

    public function manage(){
        return view('institute.course_adv_review.manage');
    }
}
