@extends('admin.layouts.admin_design')
@section('title') Enquiry @endsection
@section('content')

<div class="page-content">
    <div class="page-bar">
        <div class="page-title-breadcrumb">
            <div class=" pull-left">
                <div class="page-title">{{ (isset($data)?'Update':'Add New') }} Enquiry</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                        href="{{ route('admin.dashboard') }}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li class="active">{{ (isset($data)?'Update':'Add New') }} Enquiry</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card card-box">
                <div class="card-head">
                    <header>{{ (isset($data)?'':'New') }} Enquiry Details</header>
                </div>
                <div class="card-body " id="bar-parent">
                    @if(isset($data))
                    <form method="post" action="{{ route('enquiry.update',$data->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        @else
                        <form method="post" action="{{ route('enquiry.store') }}" enctype="multipart/form-data">
                            @csrf
                            @endif
                            <div class="form-group col-md-6">
                                <label for="s_name">Student Name:</label>
                                <input type="text" class="form-control" name="s_name" autofocus placeholder="Enter Name"
                                    value="{{@$data->s_name}}" />
                            </div>

                            <div class="form-group col-md-6">
                                <label for="s_phone">Phone Number: </label>
                                <input type="text" class="form-control" name="s_phone" placeholder="Enter Phone number"
                                    value="{{@$data->s_phone}}" />
                            </div>

                            <div class="form-group col-md-6">
                                <label for="s_mobile">Mobile Number: </label>
                                <input type="text" class="form-control" name="s_mobile"
                                    placeholder="Enter Mobile number" data-validation="required"
                                    data-validation-error-msg="Mobile number is required"
                                    value="{{@$data->s_mobile}}" />
                            </div>

                            <div class="form-group col-md-6">
                                <label for="s_mail">Email:</label>
                                <input placeholder="Enter Email address" type="email" class="form-control" name="s_mail"
                                    required value="{{@$data->s_mail}}" />
                            </div>
                            <div class="form-group col-md-6">
                                <label for="s_address">Address:</label>
                                <input type="text" placeholder="Enter Address" class="form-control" name="s_address"
                                    value="{{@$data->s_address}}" />
                            </div>
                            <div class="form-group col-md-6">
                                <label for="s_eduLevel">Highest level of education: </label>
                                <select class="form-control" name="s_eduLevel">
                                    <option value="{{@$data->s_eduLevel}}">
                                        @if (isset($data))
                                        {{@$data->s_eduLevel}}

                                        @else
                                        Select your highest level of Education
                                        @endif
                                    </option>
                                    <option value="SLC">SLC/SEE/ 0 level</option>
                                    <option value="+2/A-level">10 +2/A-level</option>
                                    <option value="Diploma">Diploma</option>
                                    <option value="Bachelors">Bachelors</option>
                                    <option value="Master">Master</option>
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="s_subject">Subject:</label>
                                <input class="form-control" placeholder=" Enter Subject" id="title" name="s_subject"
                                    type="text" value="{{@$data->s_subject}}">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="s_qual">Title of Qualification: </label>
                                <input type="text" placeholder="Enter qualification" class="form-control" name="s_qual"
                                    value="{{@$data->s_qual}}" />
                                {{-- <select class="form-control" name="s_qual">
                          <option selected="selected" disabled="disabled" hidden="hidden" value="">Qualification</option>
                          <option value="School Leaving Certificate">School Leaving Certificate</option>
                          <option value="+2/A-level">+2/A-level</option>
                          <option value="Diploma">Diploma</option>
                          <option value="Bachelors">Bachelors</option>
                          <option value="Master">Master</option>
                        </select> --}}
                            </div>

                            <div class="form-group col-md-6">
                                <label for="s_exp">Year of Experience:</label>
                                <select class="form-control" name="s_exp">
                                    <option value="{{@$data->s_exp}}">
                                        @if (isset($data))
                                        {{@$data->s_exp}}
                                        @else
                                        Select your Experience
                                        @endif
                                    </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10 or more ">10 or more</option>
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="s_work">Work Industry: </label>
                                <select class="form-control" name="s_work">
                                    <option value="{{@$data->s_work}}">
                                        @if (isset($data))
                                        {{@$data->s_work}}
                                        @else
                                        Select Work Industry
                                        @endif
                                    </option>
                                    <option value="Industry">Industry</option>
                                    <option value="Accounting">Accounting</option>
                                    <option value="Airlines/Aviation	">Airlines/Aviation </option>
                                    <option value="Alternative Dispute Resolution	">Alternative Dispute Resolution
                                    </option>
                                    <option value="Alternative Medicine	">Alternative Medicine </option>
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="s_serviceInterest">Service Interested: </label>
                                <select class="form-control" name="s_serviceInterest">
                                    <option value="{{@$data->s_serviceInterest}}">
                                        @if (isset($data))
                                        {{@$data->s_serviceInterest}}
                                        @else
                                        Select Service Interested
                                        @endif
                                    </option>
                                    <option value="Study Abroad">Study Abroad</option>
                                    <option value="Visa">Visa</option>
                                    <option value="Passport">Passport</option>
                                    <option value="Permanent Ressidency(PR)-Canada">Permanent Ressidency(PR)-Canada
                                    </option>
                                    <option value="English Translation">English Translation</option>
                                    <option value="Taxi Service">Taxi Service</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="s_langTest">Language Test(if any): </label>
                                <select class="form-control" name="s_langTest">
                                    <option {{@$data->s_langTest}}">
                                        @if (isset($data))
                                        {{@$data->s_langTest}}
                                        @else
                                        Language Test
                                        @endif
                                    </option>
                                    <option value="CAE">CAE</option>
                                    <option value="IELTS">IELTS</option>
                                    <option value="TOEFL">TOEFL</option>
                                    <option value="PTE">PTE</option>
                                    <option value="SAT">SAT</option>
                                    <option value="GRE">GRE</option>
                                    <option value="GMAT">GMAT</option>
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="s_langScore">Language test score:</label>
                                <select class="form-control" name="s_langScore">
                                    <option value="{{@$data->s_langScore}}">
                                        @if (isset($data))
                                        {{@$data->s_langScore}}
                                        @else
                                        Select your Score
                                        @endif
                                    </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="s_countryInterest">Country Interested: </label>
                                <select class="form-control" name="s_countryInterest">
                                    <option value="{{@$data->s_countryInterest}}">
                                        @if (isset($data))
                                        {{@$data->s_countryInterest}}
                                        @else
                                        Select Interested Country
                                        @endif
                                    </option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="Estonia">Estonia</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Hungary">Hungary</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Poland">Poland</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group col-md-6">
                                    <input type="checkbox" id="Usercheck" name="visited" @if(@$data->visited == 1)
                                    checked @endif>
                                    <span>Visited Office</span>
                                </div>
                            </div>

                            <input type="hidden" name="response_id[]" id="response_id"
                                value="{{ @$data->enquiries->id }}">

                            <button type="submit" class="btn btn-primary">{{ (isset($data)?'Update':'Add New') }}
                                Enquiry</button>

                            <a href="{{ route('enquiry.index') }}" class="btn btn-danger">Go Back</a>

                        </form>
                </div>
            </div>
        </div>

    </div>

</div>

@endsection


@section('css')

<link href="{{asset('public/adminAssets/assets/plugins/select2/css/select2.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('public/adminAssets/assets/plugins/select2/css/select2-bootstrap.min.css')}}" rel="stylesheet"
    type="text/css" />
@endsection



@section('scripts')

<!-- select 2 js -->
<script src="{{asset('public/adminAssets/assets/plugins/select2/js/select2.js')}}"></script>
<script src="{{asset('public/adminAssets/assets/js/pages/select2/select2-init.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>

<script>
    $.validate({
        lang: 'en',
        modules: 'file',
    });

    $(document).ready(function() {

        $('.enquiry-category-multiselect').select2({
            placeholder: 'Please Choose Category'
        });

        $('.select2-multiple').select2({
            placeholder: 'Please Choose Source'
        });

        $('.responses-multiselect').select2({
            placeholder: 'Responded Through'
        });


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
        $('#remarks').summernote({
            'height': 130
        });
    });
</script>
@endsection
