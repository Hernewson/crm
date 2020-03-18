<!DOCTYPE html>
<html>
<head>
  <title> Customer Relation Management (CRM)</title>

  <style type="text/css">
    table {
  border-collapse: collapse;
  width: 100%;
}

table, th, td {
  border: 0.1px solid black;
  text-align: center;
}

  </style>
</head>

<body onload="printCourse()">

    
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">All Services List</div>
                </div>
                <div class="table-scrollable">
                    <center>
                    <div class="table-scrollable">
                        <table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th> Service Name </th>
                                    <th> Prices </th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($courses as $course)
                                <tr>
                                    <td>{{ $loop->index +1 }}</td>
                                    <td>{{$course->name}}</td>
                                    <td> Rs. {{ $course->fees }}</td>
                                    <td>
                                        @if($course->status == 1)
                                            <span class="label label-rouded label-menu label-success">Active</span>
                                            @else
                                            <span class="label label-rouded label-menu label-danger">In Active</span>
                                        @endif
                                    </td>
                                   
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    </center>
                </div>    
            </div>
        </div>
    </div>
                                       




</body>

<script>

function printCourse(){
    window.print();
}
</script>