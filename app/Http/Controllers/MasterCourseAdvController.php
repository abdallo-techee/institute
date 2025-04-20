<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CourseAdv;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class MasterCourseAdvController extends Controller
{
    //
    public function store_course_adv (Request $request){

        $validate_data = $request->validate([
            'course_adv_name' =>'unique:course_advs|max:100|min:1',
            'category_id_fk' => 'required|exists:categories,id'
        ]);
        CourseAdv::create($validate_data);

        return redirect()->back()->with('message' , 'Course Adv Added Successfully');
    }


    public function show_course_adv($id){
        session(['admin.course_adv.manage_course_adv' => url()->previous()]);

        $course_adv_info = CourseAdv::find($id);

        // $cat_id = $course_adv_info->category_id_fk;
        $categories = Category::all();

        $names = ['course_adv_info', 'categories' ];
        return view('admin.course_adv.edit' , compact('course_adv_info', 'categories'));

    }

    // public function update_course_adv(Request $request , $id){

    //     $course_adv = CourseAdv::findOrFail($id);

    //     $validate_data = $request->validate([
    //         'course_adv_name' =>'unique:course_advs|max:100|min:1',
    //         'category_name' =>'unique:categories',
    //         'category_id_fk' => 'required|exists:categories,id'
    //     ]);

    //     $course_adv->update($validate_data);

    //     // $categories = CourseAdv::all();
    //     // return redirect()->back()->with('message' , 'Category Updated Successfully');

    //     return redirect(session('admin.course_adv.manage_course_adv'))->with('message', 'Course Adv updated successfully!');



    // }

    public function update_course_adv(Request $request, $id) {
        // Find the existing course advertisement
        $course_adv = CourseAdv::findOrFail($id);

        /**Unique Validation with Ignore:
The Rule::unique('course_advs')->ignore($course_adv->id)
 ensures that the validation for the course name only considers other records and ignores the current course advertisement being updated.
This means if the user submits the same name as before, it won't trigger a validation error. */
        // Validate the request
        $validate_data = $request->validate([
            'course_adv_name' => [
                'string',
                'max:100',
                'min:1',
                // The following line ensures the course name is unique, except for the current record
                Rule::unique('course_advs')->ignore($course_adv->id),
            ],
            'category_id_fk' => 'required|exists:categories,id'
        ]);

        // If category_name is part of the request and you want to validate it for uniqueness
        // if ($request->has('category_name')) {
        //     $validate_data['category_name'] = [
        //         'string',
        //         'max:100',
        //         Rule::unique('categories')->ignore($course_adv->category_id_fk),
        //     ];
        // }

        // Update the course advertisement
        $course_adv->update($validate_data);

        return redirect(session('admin.course_adv.manage_course_adv'))->with('message', 'Course Adv updated successfully!');
    }
//
    public function delete_course_adv($id){

        $course_adv = CourseAdv::findOrFail($id)->delete();


        return redirect()->back()->with('message' , 'Course Adv Deleted Successfully');


    }


}
