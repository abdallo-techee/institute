<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseAdvReviewsController extends Controller
{
    //

    public function index(){
        return view('admin.course_adv_review.course_adv_review');
    }

    public function manage(){
        return view('admin.course_adv_review.manage');
    }
}
