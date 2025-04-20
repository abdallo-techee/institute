
<?php

?>
@extends('admin.layouts.layout')
@section('admin_page_title')
Manage Course Advertisement - Admin Panel
@endsection
@section('admin_layout')
    <h2>Manage Course Advertisement Page</h2>

        <div calss="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Manage Course Adv</h5>
                    </div>


                    @if (session('message'))
                        <div class="alert alert-success my-2" id="update-message">
                            {{ session('message') }}
                        </div>
                    @endif



                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Course Adv</th>
                                        <th>Category Name</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- <!-- Down here this for loop function to get all categories from database and that is because the MasterCategoryController then here #
                                        they will be shown if exist if there was not any category it wil handle that too by showing 'No Category'
                                        -- > --}}
                                    @foreach ($course_advs as $course_adv)
                                        <tr>
                                            <td>{{$course_adv->id }}</td>
                                            <td>{{$course_adv->course_adv_name}}</td>
                                            {{-- <td>{{$course_adv->category_id_fk}}</td> --}}
                                            {{-- <td>{{$courseAdv->category->category_name}}</td> --}}
                                            <td>{{ $course_adv->category ? $course_adv->category->category_name : 'No category' }}</td>

                                            {{-- <td>
                                                @if($course_adv->category)
                                                    {{ $course_adv->category->category_name }}
                                                @else
                                                    <span>No category</span>
                                                @endif
                                            </td> --}}

                                            <td>

                                                <a href="{{ route('show.course_adv', $course_adv->id) }}" class="btn btn-primary">Edit</a>

                                                <form action="{{ route('delete.course_adv', $course_adv->id) }}" method="POST"
                                                    onsubmit="return confirmDelete();">
                                                    @csrf
                                                    @method('DELETE')
                                                    {{-- <input type="submit" value="Delete" class="btn btn-danger" > --}}

                                                    <button type="button" class="btn btn-danger"
                                                        onclick="confirmDelete(this)">Delete</button>

                                                    {{-- <a href="#" class="btn btn-danger">Delete</a> --}}

                                                </form>

                                            </td>




                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div>


        {{-- <script>
            function confirmDelete() {
                return confirm('Are you sure you want to delete this category?');
            }
        </script> --}}



        {{-- <!-- code down here after click on delete button it will show custom dialog to continue or not --> --}}
         {{-- why using this code because if delete button was pressed accedentlly it will directly delete the item , so this code is safe approach --> --}}
        <script>
            function confirmDelete(button) {
                const form = button.closest('form'); // Get the associated form

                Swal.fire({
                    title: 'Are you sure?',
                    text: "Everything related to this Course Adv will be deleted too!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit(); // Submit the form if confirmed
                    }
                });
            }
        </script>


        <!-- code down here after updating the success message will be shown for few seconds and disappeared  -->
        <script>
            // Check if the success message exists
            document.addEventListener('DOMContentLoaded', function() {
                const message = document.getElementById('update-message');
                if (message) {
                    // Set a timer to fade out the message after 3 seconds (3000 milliseconds)
                    setTimeout(() => {
                        message.style.transition = 'opacity 1s'; // Transition effect
                        message.style.opacity = '0'; // Fade out
                        // Remove the message after the fade out is complete
                        setTimeout(() => {
                            message.remove();
                        }, 1000); // Wait for 1 second before removing
                    }, 3000); // 3 seconds
                }
            });
        </script>
@endsection

