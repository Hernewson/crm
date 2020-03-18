@extends('admin.layouts.admin_design')

@section('title')  Profile - Customer Management System (CMS) @endsection

@section('content')

<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Company Profile</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Company Profile</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<!-- BEGIN PROFILE SIDEBAR -->
							<div class="profile-sidebar">
								<div class="card ">
									<div class="card-body no-padding height-9">

										<div class="profile-usertitle">
											<div class="profile-usertitle-name"> {{$company->company_name}} </div>
										</div>
										<ul class="list-group list-group-unbordered">
                                             <li class="list-group-item">
												<b>Type</b> <a class="pull-right">{{@$company->type}}</a>
                                            </li>
										    <li class="list-group-item">
												<b>Group Name</b> <a class="pull-right">{{@$company->group_name}}</a>
                                            </li>
                                            <li class="list-group-item">
												<b>Email</b> <a class="pull-right">{{@$company->email}}</a>
                                            </li>
                                            <li class="list-group-item">
												<b>Phone</b> <a class="pull-right">{{@$company->phone}}</a>
											</li>
											<li class="list-group-item">
												<b>Address</b> <a class="pull-right">{{@$company->address}}</a>
                                            </li>
                                            <li class="list-group-item">
												<b>City</b> <a class="pull-right">{{@$company->city}}</a>
                                            </li>
                                            <li class="list-group-item">
												<b>State</b> <a class="pull-right">{{@$company->state}}</a>
                                            </li>
                                            <li class="list-group-item">
												<b>Country</b> <a class="pull-right">{{@$company->country['name']}}</a>
                                            </li>
                                            <li class="list-group-item">
												<b>PAN No</b> <a class="pull-right">{{@$company->pan}}</a>
                                            </li>
                                             <li class="list-group-item">
												<b>Registration No</b> <a class="pull-right">{{@$company->registration_no}}</a>
                                            </li>
										</ul>
										<!-- END SIDEBAR USER TITLE -->
										<!-- SIDEBAR BUTTONS -->
										<!-- END SIDEBAR BUTTONS -->
									</div>
								</div>
							</div>
							<!-- END BEGIN PROFILE SIDEBAR -->
                            <!-- BEGIN PROFILE CONTENT -->
                            <div class="profile-content">
								<div class="row">
									<div class="card col-md-12">

										<div class="white-box">
											<!-- Nav tabs -->
											<div class="p-rl-20">
												<ul class="nav customtab nav-tabs" role="tablist">
												</ul>
											</div>
											<!-- Tab panes -->
											<div class="tab-content">
												<div class="tab-pane active fontawesome-demo" id="tab1">
													<div id="biography">
                                                        <h4 class="font-bold">First Contact Person Details</h4>

                                                        <div class="row">
															<div class="col-md-12"> <b>Full Name:&nbsp; <a>{{@$company->first_contact_person}}</a></b>
															</div>
														</div>
														<table class="table">
                                                            <tr>
                                                                <th>Designation</th>
                                                                <th>Email</th>
                                                                <th>Phone</th>
                                                            </tr>

                                                            <tr>
                                                                <td>{{$company->first_designation}}</td>
                                                                <td>{{$company->first_email}}</td>
                                                                <td>{{$company->first_phone}}</td>
                                                            </tr>
														</table>
                                                        <hr>

                                                         <h4 class="font-bold">Second Contact Person Details</h4>

                                                        <div class="row">
															<div class="col-md-12"> <b>Full Name:&nbsp; <a>{{@$company->second_contact_person}}</a></b>
															</div>
														</div>
														<table class="table">
                                                            <tr>
                                                                <th>Designation</th>
                                                                <th>Email</th>
                                                                <th>Phone</th>
                                                            </tr>

                                                            <tr>
                                                                <td>{{$company->second_designation}}</td>
                                                                <td>{{$company->second_email}}</td>
                                                                <td>{{$company->second_phone}}</td>
                                                            </tr>
														</table>
														<hr>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- END PROFILE CONTENT -->
						</div>
					</div>
				</div>
</div>
            @endsection
