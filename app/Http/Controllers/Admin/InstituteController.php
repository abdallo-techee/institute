<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InstituteController extends Controller
{
    // public function manage_institute(){
    //     return view('admin.institute.manage_institute');
    // }

    public function verify_institute(){
        return view('admin.institute.verify_institute');
    }

    public function add_institute(){
        return view('admin.institute.add_institute');
    }
}
