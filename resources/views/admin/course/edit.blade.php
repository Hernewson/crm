@extends('admin.layouts.admin_design')

@section('title')  Edit Service @endsection

@section('content')

    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Edit  Service -  {{ $course->name }}</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                                           href="{{ route('admin.dashboard') }}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Edit Service</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>New Service Details</header>


                    </div>
                    <div class="card-body " id="bar-parent">
                        <form method="post" action="" enctype="multipart/form-data">
                            @csrf



                            <div class="row">
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Service Name</label>
                                            <input type="text" class="form-control" id="name"
                                                   placeholder="Enter name" name="name" data-validation="length"
                                                   data-validation-length="3-400"
                                                   data-validation-error-msg="Course Name is required (3-50 chars)" value="{{ $course->name }}">
                                        </div>
                                    </div>


                                   

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="fees">Price </label>
                                            <input type="number" class="form-control" id="fees"
                                                   placeholder="Enter Fees" name="fees" data-validation="required"
                                                   data-validation-error-msg="Fee is required" value="{{ $course->fees }}">
                                        </div>
                                    </div>



                                    
                                </div>

                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="description">Service Description </label>
                                            <textarea name="description" id="description" cols="30" rows="10" class="form-control">
                                                {{ $course->description }}
                                            </textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="checkbox" name="status" id="status" value="1" @if($course->status == 1) checked @endif>
                                            <label for="status">Active</label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <br>

                            <button  type="submit" class="btn btn-primary">Update Service</button>

                            <a href="{{ route('viewCourses') }}" class="btn btn-danger">Go Back</a>

                        </form>
                    </div>
                </div>
            </div>


            <!-- Modal -->
            <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-body">
                        @if(!empty($course->image))
                            <img src="{{ asset('public/uploads/course/'.$course->image) }}" alt="{{ $course->name }}" height="200px" width="auto">
                        @else
                            <img src="{{ asset('public/uploads/course/course.png') }}" alt="{{ $course->name }}" height="200px" width="auto">
                        @endif
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection




@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>

    <script>
        $.validate({
            lang: 'en',
            modules: 'file',
        });

    </script>

    <script src="{{ asset('public/adminAssets/assets/js/sweetalert.min.js') }}"></script>
    <script src="{{ asset('public/adminAssets/assets/js/jquery.sweet-alert.custom.js') }}"></script>
    <script type="text/javascript">
        @if(session('flash_message'))
        swal("Success!", "{!! session('flash_message') !!}", "success")
        @endif

        @if(session('flash_error'))
        swal("Error", "{!! session('flash_error') !!}")
        @endif
    </script>



    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>
    <script>
        $(document).ready(function() {
            $('#description').summernote({
                'height' : 130
            });
        });
    </script>
@endsection