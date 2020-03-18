@extends('admin.layouts.admin_design')

@section('title')  Add New Service @endsection

@section('content')

    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Add New Service</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                                           href="{{ route('admin.dashboard') }}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Add New Service</li>
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
                        <form method="post" action="{{route('addCourse')}}" enctype="multipart/form-data">
                            @csrf



                            <div class="row">
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Service Name</label>
                                            <input type="text" class="form-control" id="name" value="{{old('name')}}"
                                                   placeholder="Enter name" name="name" data-validation="length"
                                                   data-validation-length="3-400" 
                                                   data-validation-error-msg="Service Name is required (3-50 chars)">
                                        </div>
                                    </div>


                                   

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="fees">Price</label>
                                            <input type="number" class="form-control" id="fees" value="{{old('fees')}}"
                                                   placeholder="Enter Fees" name="fees" data-validation="required"
                                                   data-validation-error-msg="Price is required">
                                        </div>
                                    </div>



                                   
                                </div>

                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="description">Service Description </label>
                                            <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="checkbox" name="status" id="status" value="1" checked>
                                            <label for="status">Active</label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <button  type="submit" class="btn btn-primary">Add New Service</button>

                            <a href="{{ route('viewCourses') }}" class="btn btn-danger">Go Back</a>

                        </form>
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