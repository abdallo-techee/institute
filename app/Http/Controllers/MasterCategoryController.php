<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class MasterCategoryController extends Controller
{
    //
    public function store_cat (Request $request){


        //

        // echo "failed";
        //



        $validate_data = $request->validate([
            'category_name' =>'unique:categories|max:100|min:1',
             'institute_id_fk' => 'required|exists:institutes,id'
        ]);
        Category::create($validate_data);

        return redirect()->back()->with('message' , 'Category Added Successfully');
    }

    public function show_cat($id){
        session(['admin.category.manage' => url()->previous()]);

        $category_info = Category::find($id);
        return view('admin.category.edit' , compact('category_info'));

    }

    public function update_cat(Request $request , $id){

        $category = Category::findOrFail($id);

        $validate_data = $request->validate([
            'category_name' =>'unique:categories|max:100|min:1',
        ]);
        $category->update($validate_data);
        $categories = Category::all();
        // return redirect()->back()->with('message' , 'Category Updated Successfully');

        return redirect(session('admin.category.manage'))->with('message', 'Category updated successfully!');



    }

    public function delete_cat($id){

        $category = Category::findOrFail($id)->delete();


        return redirect()->back()->with('message' , 'Category Deleted Successfully');


    }


}
