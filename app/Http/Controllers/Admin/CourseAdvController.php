<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\CourseAdv;
use Illuminate\Http\Request;

class CourseAdvController extends Controller
{
    //
    public function index (){

        $categories = Category::all();
        return view('admin.course_adv.create_course_adv' ,compact('categories'));
    }
    public function manage_course_adv (){

        // $course_advs = CourseAdv::all();
        $course_advs = CourseAdv::with('category')->get();

        return view('admin.course_adv.manage_course_adv' , compact('course_advs'));
    }
}


