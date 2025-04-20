@extends('admin.layouts.layout')
@section('admin_page_title')
Edit Category - Admin Panel
@endsection
@section('admin_layout')
    <h2>Edit Category Page</h2>
    <div calss="row">
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Edit Category</h5>
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

                    <form action="{{route('update.cat' , $category_info->id )}}" method="POST">
                            @csrf
                            @method('PUT')
                            <label for="category_name" class="fw-bold mb-2">Your Category Name</label>
                            <input type="text" name="category_name" class="form-control" placeholder="Languages | Computer ..." value = "{{$category_info->category_name}}" autocomplete="off">
                            <button type="submit" class="btn btn-primary w-200 w-100">Update Category</button>
                    </form>
                </div>
            </div>


        </div>
    </div>
@endsection
