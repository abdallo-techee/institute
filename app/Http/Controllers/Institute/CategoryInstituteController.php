<?php

namespace App\Http\Controllers\Institute;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryInstituteController extends Controller
{
    //
    public function index(){
        return view('institute.category.create_category');

    }
  public function manage(){
        return view('institute.category.manage');
    }
}
