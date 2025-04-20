@extends('admin.layouts.layout')
@section('admin_page_title')
Edit Course Advertisement - Admin Panel
@endsection
@php
use App\Constants\CategoryObject;
@endphp
@section('admin_layout')
    <h2>Edit Course Advertisement Page</h2>
    <div calss="row">
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Edit Course Advertisement</h5>
                </div>
                <div class="card-body">

                    @if ($errors->any())
                    <div class="alert alert-warning alert-dismissible fade show">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif



                    @if (session('message'))

                        <div class="alert alert-success">
                            {{session('message')}}
                        </div>

                    @endif

                    <form action="{{route('update.course_adv' , $course_adv_info->id )}}" method="POST">
                            @csrf
                            @method('PUT')
                            <label for="course_adv_name" class="fw-bold mb-2">Your Course Adv Name</label>
                            <input type="text" name="course_adv_name" class="form-control" placeholder="Languages | Computer ..." value = "{{$course_adv_info->course_adv_name}}" autocomplete="off">

                            <!-- -->

                            <!-- -->
                            <!-- -->
                            <label for="category_id_fk" class="fw-bold mb-2">Select Category</label>
                            <select name="category_id_fk" class="form-control" id="category_id_fk">
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}"
                                    @if($category->id == $course_adv_info->category_id_fk) selected @endif>
                                    {{ $category->category_name }}
                                </option>
                            @endforeach
                            </select>

                            <!-- -->



                            <button type="submit" class="btn btn-primary w-200 w-100">Update Course Adv</button>
                    </form>

                </div>
            </div>


        </div>
    </div>
@endsection
