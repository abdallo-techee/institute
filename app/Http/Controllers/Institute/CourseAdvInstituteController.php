<?php

namespace App\Http\Controllers\Institute;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\CourseAdv;
use Illuminate\Http\Request;

class CourseAdvInstituteController extends Controller
{
    //
    public function index (){

        $categories = Category::all();

        return view('institute.course_adv.create_course_adv' , compact('categories'));
    }
    public function manage (){

        $course_advs = CourseAdv::with('category')->get();


        return view('institute.course_adv.manage' , compact('course_advs'));
    }
}
