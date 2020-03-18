@extends('admin.layouts.admin_design')

@section('title') View All enquries @endsection

@section('content')

<div class="page-content">
    <div class="page-bar">
        <div class="page-title-breadcrumb">
            <div class=" pull-left">
                <div class="page-title">All enquries List</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                        href="{{ route('admin.dashboard') }}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li><a class="parent-item" href="javascript:">enquries</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li class="active">View All enquries</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tabbable-line">
                <div class="tab-content">
                    <div class="tab-pane active fontawesome-demo" id="tab1">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-box">
                                    <div class="card-head">
                                        <header>All enquries List</header>

                                    </div>
                                    <div class="card-body ">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-6">
                                                <div class="btn-group">
                                                    <a href="{{ route('enquiry.create') }}" id="addRow"
                                                        class="btn btn-info" style="margin-right: 10px;">
                                                        Add New <i class="fa fa-plus"></i>
                                                    </a>


                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-6">
                                                <div class="btn-group pull-right">
                                                    <a class="btn deepPink-bgcolor  btn-outline dropdown-toggle"
                                                        data-toggle="dropdown">Tools
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-menu pull-right">
                                                        <li>
                                                            <a href="{{route('printEnquiry')}}">
                                                                <i class="fa fa-print"></i> Print </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{route('generatePDF')}}">
                                                                <i class="fa fa-file-pdf-o"></i> Save as
                                                                PDF </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-scrollable">
                                            <table
                                                class="table table-striped table-bordered table-hover table-checkable order-column valign-middle"
                                                id="example4">
                                                <thead>
                                                    <tr>
                                                        <th> ID </th>
                                                        <th> Name </th>
                                                        <th> Phone </th>
                                                        <th> Mobile </th>
                                                        <th> Email </th>
                                                        <th> Address </th>
                                                        <th> Education Level </th>
                                                        <th> Subject </th>
                                                        <th> Qualification </th>
                                                        <th> Experience </th>
                                                        <th> Work </th>
                                                        <th> Service Interested </th>
                                                        <th> Language test </th>
                                                        <th> Language test Score </th>
                                                        <th> Country Interested </th>
                                                        <th> Office Visited </th>
                                                        <td colspan=2> <b>Actions </td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($enquiry as $key=>$enquiries)
                                                    <tr>
                                                        <td>{{ $key+1 }}</td>
                                                        <td class="">
                                                            {{ $enquiries->s_name }}
                                                        </td>
                                                        <td>
                                                            {{ $enquiries->s_phone }}
                                                        </td>
                                                        <td>
                                                            {{ $enquiries->s_mobile }}
                                                        </td>
                                                        <td>
                                                            {{ $enquiries->s_mail }}
                                                        </td>
                                                        <td>
                                                            {{ $enquiries->s_address }}
                                                        </td>
                                                        <td>
                                                            {{ $enquiries->s_eduLevel }}
                                                        </td>
                                                        <td>
                                                            {{ $enquiries->s_subject }}
                                                        </td>
                                                        <td>
                                                            {{ $enquiries->s_qual }}
                                                        </td>
                                                        <td>
                                                            {{ $enquiries->s_exp }}
                                                        </td>
                                                        <td>
                                                            {{ $enquiries->s_work }}
                                                        </td>
                                                        <td>
                                                            {{ $enquiries->s_serviceInterest }}
                                                        </td>
                                                        <td>
                                                            {{ $enquiries->s_langTest }}
                                                        </td>
                                                        <td>
                                                            {{ $enquiries->s_langScore }}
                                                        </td>
                                                        <td>
                                                            {{ $enquiries->s_countryInterest }}
                                                        </td>

                                                        <td>@if($enquiries->visited==1)Yes
                                                            @elseif($enquiries->visited==0)
                                                            No @endif </td>

                                                        <td>

                                                            <a href="{{ route('enquiry.edit', $enquiries->id) }}"
                                                                class="btn btn-primary btn-xs">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>

                                                            <button href="javascript:" rel="{{$enquiries->id}}"
                                                                rel1="enquiries/delete-enquiry"
                                                                class="btn btn-danger btn-xs deleteRecord">
                                                                <i class="fa fa-trash-o "></i>
                                                            </button>
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
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('css')
<!-- data tables -->
<link href="{{ asset('adminAssets/assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css') }}"
    rel="stylesheet">
@endsection

@section('scripts')
<!-- data tables -->
<script src="{{ asset('adminAssets/assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('adminAssets/assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js') }}">
</script>
<script src="{{ asset('adminAssets/assets/js/pages/table/table_data.js') }}"></script>


<script src="{{ asset('adminAssets/assets/js/sweetalert.min.js') }}"></script>
<script src="{{ asset('adminAssets/assets/js/jquery.sweet-alert.custom.js') }}"></script>
<script type="text/javascript">
    @if(session('flash_message'))
    swal("Success!", "{!! session('flash_message') !!}", "success")
    @endif

    @if(session('flash_error'))
    swal("Error", "{!! session('flash_error') !!}")
    @endif
</script>


@endsection
