<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CategoryController extends Controller
{

    public function create_category(){
        //Log::info('Navigated to create category page');
        return view('admin.category.create_category');

    }
  public function manage(){
    $categories = Category::all();
        return view('admin.category.manage' , compact('categories')) ;
    }




}
