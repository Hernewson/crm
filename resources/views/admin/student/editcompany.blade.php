@extends('admin.layouts.admin_design')

@section('title')  Edit Company Details  - Institute Management System (IMS) @endsection

@section('content')

    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Edit Company Details</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                                           href="{{ route('admin.dashboard') }}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Edit Company Details</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">


                        <span>                        <header>Edit Company Details</header>



                        <header class="float-right" style="margin-right: 550px;"> Edit Authorized Contact</header>

                        </span>



                    </div>
                    <div class="card-body " id="bar-parent">
                        <form method="post" action="{{route('editcompany',$company->id)}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">


                                <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Company Name</label>
                                           <input type="text" class="form-control" id="company_name"
                                                   placeholder="Enter Company Name" name="company_name" value="{{$company->company_name}}" data-validation="length"
                                                   data-validation-length="3-30"
                                                   data-validation-error-msg=" Company Name is required">
                                        </div>
                                    </div>


                                       <div class="col-md-12">
                                <div class="form-group" >
                                    <div class="icheck-primary">
                                        <label for="status">Type</label>

                                        <div class="row">
                                          <div class="col-md-6">
                                        <input type="radio" name="type" value="customer" {{ ($company->type=="customer")? "checked" : "" }}>Customer<br>
                                        <input type="radio" name="type" value="Supplier" {{ ($company->type=="Supplier")? "checked" : "" }} >Supplier
                                        </div>
                                        <div class="col-md-6">
                                          <input type="radio" name="types" value="Client" {{ ($company->types=="Client")? "checked" : "" }}>Client<br>
                                         <input type="radio" name="types" value="company" {{ ($company->types=="company")? "checked" : "" }}>Company
                                         </div>
                                         </div>


                                    </div>
                                </div>
                            </div>




                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="group">Group</label>
                                          <input type="text" class="form-control" id="group_name"
                                                   placeholder="Enter Group Name" name="group_name" value="{{$company->group_name}}" data-validation="length"
                                                   data-validation-length="3-30"
                                                   data-validation-error-msg=" Group Name is required">
                                        </div>
                                    </div>

                                      {{-- <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="business number">Business Number</label>
                                            <input type="text" class="form-control" id="business_number"
                                                   placeholder="Enter Business Number" name="business_number" value="{{$company->business_number}}"  data-validation="length"
                                                   data-validation-length="3-30"
                                                   data-validation-error-msg=" Business Number is required">
                                        </div>
                                   </div> --}}

                                      <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control" id="email"
                                                   placeholder="Enter Email" name="email"  value="{{$company->email}}" data-validation="length"
                                                   data-validation-length="3-30"
                                                   data-validation-error-msg=" Email is required ">
                                        </div>
                                   </div>
                                   <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input type="text" class="form-control" value="{{$company->phone}}" id="phone"
                                                   placeholder="Enter phone" name="phone" >
                                        </div>
                                   </div>

                                   <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="registration">Registration Number</label>
                                            <input type="text" class="form-control" id="registration_no"
                                                   placeholder="Enter registration number"  value="{{$company->registration_no}}" name="registration_no"  >
                                        </div>
                                   </div>

                                   <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="mobile">PAN/VAT Number</label>
                                            <input type="text" class="form-control" id="pan"
                                                   placeholder="Enter pan/vat number" value="{{$company->pan}}" name="pan"  >
                                        </div>
                                   </div>


                                      <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="address">Address</label>
                                            <input type="text" class="form-control" id="address"
                                                   placeholder="Enter Address" value="{{$company->address}}" name="address" data-validation="length"
                                                   data-validation-length="3-30"
                                                   data-validation-error-msg=" Address is required ">
                                        </div>
                                   </div>

                                      <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="city">City</label>
                                            <input type="text" class="form-control" value="{{$company->city}}" id="city"
                                                   placeholder="Enter city" name="city" >
                                        </div>
                                   </div>
                                   <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="state">State/Region</label>
                                            <input type="text" class="form-control" id="state"
                                                   placeholder="Enter state" value="{{$company->state}}" name="state" >
                                        </div>
                                   </div>


                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="country">Country</label>
                                            <select class="form-control single-select" name="country_id" >
                                                <option disabled selected>Select Country</option>
                                                 @foreach($countries as $value)
                                                    <option value="{{ $value->id }}" @if($value->id == $company->country_id) selected @endif>{{ $value->name }}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>
                                  </div>










                                               <div class="col-md-6">

                                                <div class="form-group">
                                                    <label for="name">1st Contact Person Name</label>
                                                    <input type="text" class="form-control" placeholder="Enter Name" id="first_contact_person" value="{{$company->first_contact_person}}" name="first_contact_person" >
                                                </div>

                                                <div class="form-group">
                                                    <label  for="designation">Designation</label>
                                                    <input type="text" class="form-control" placeholder="Enter Designation" id="first_designation" value="{{$company->first_designation}}" name="first_designation" >
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="text" class="form-control" id="first_email" value="{{$company->first_email}}" name="first_email"/>
                                                </div>

                                                <div class="form-group">
                                                    <label for="phone">Phone Number</label>
                                                    <input type="text" class="form-control" id="first_phone" value="{{$company->first_phone}}"  name="first_phone"/>
                                                </div>
                                                 <div class="form-group">
                                                    <label for="name">2st Contact Person Name</label>
                                                    <input type="text" class="form-control" placeholder="Enter Name" id="second_contact_person" value="{{$company->second_contact_person}}" name="second_contact_person" >
                                                </div>
                                                <div class="form-group">
                                                    <label  for="designation">Designation</label>
                                                    <input type="text" class="form-control" placeholder="Enter Designation" id="second_designation" value="{{$company->second_designation}}" name="second_designation" >
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="text" class="form-control" id="second_email" value="{{$company->second_email}}"  name="second_email"/>
                                                </div>

                                                <div class="form-group">
                                                    <label for="phone">Phone Number</label>
                                                    <input type="text" class="form-control" id="second_phone" value="{{$company->second_phone}}" name="second_phone"/>
                                                </div>

                                            </div>
                                           </div>







                                         <div class="col-md-12">
                                        <div class="form-group">
                                    <button  type="submit" class="btn btn-primary">Updated </button>

                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection


@section('css')

<link href="{{asset('public/adminAssets/assets/plugins/select2/css/select2.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('public/adminAssets/assets/plugins/select2/css/select2-bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    @endsection




    @section('scripts')
<script src="{{asset('public/adminAssets/assets/plugins/select2/js/select2.js')}}"></script>
<script src="{{asset('public/adminAssets/assets/js/pages/select2/select2-init.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
 <script>
    $.validate({
        lang: 'en',
        modules: 'file',
    });

    $(document).ready(function() {
        $('.select2-multiple').select2({
            placeholder: 'Please Choose Course'
        });

        $('.select2-shift').select2({
            placeholder: 'Please Choose Shifts'
        });
    });

    </script>

      <script src="{{ asset('public/adminAssets/assets/js/sweetalert.min.js') }}"></script>

    <script src="{{ asset('public/adminAssets/assets/js/jquery.sweet-alert.custom.js') }}"></script>                                                                                                                                                           <script type="text/javascript">
    @if(session('flash_message'))
swal("Success!", "{!! session('flash_message') !!}", "success")
    @endif

    @if(session('flash_error'))
swal("Error", "{!! session('flash_error') !!}")
    @endif
</script>




@endsection
