@extends('admin.layouts.layout')
@section('admin_page_title')
Create Category - Admin Panel
@endsection
@section('admin_layout')
    <h2>Create Category Page</h2>
    <div calss="row">
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Create Category</h5>
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

                    <form action="{{route('store.cat')}}" method="POST">
                            @csrf
                            <label for="category_name" class="fw-bold mb-2">Your Category Name</label>
                            <input type="text" name="category_name" class="form-control" placeholder="Languages | Computer ..." autocomplete="off">

                            <input type="text" name="institute_id_fk" class="form-control" placeholder="Institute You Chose" autocomplete="off" value="1">

                            <button type="submit" class="btn btn-primary w-200 w-100">Add Category</button>
                    </form>
                </div>
            </div>


        </div>
    </div>
@endsection
