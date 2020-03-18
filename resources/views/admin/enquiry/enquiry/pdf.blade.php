<!DOCTYPE html>
<html>
<head>
  <title> Customer Relation Management  (CRM)</title>

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
<body>
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">All Fees List</div>


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

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($enquiry as $key=>$enquries)
                                                    <tr>
                                                        <td>{{ $key+1 }}</td>
                                                        <td class="">
                                                            {{ $enquries->s_name }}
                                                        </td>
                                                        <td>
                                                            {{ $enquries->s_phone }}
                                                        </td>
                                                        <td>
                                                            {{ $enquries->s_mobile }}
                                                        </td>
                                                        <td>
                                                            {{ $enquries->s_mail }}
                                                        </td>
                                                        <td>
                                                            {{ $enquries->s_address }}
                                                        </td>
                                                        <td>
                                                            {{ $enquries->s_eduLevel }}
                                                        </td>
                                                        <td>
                                                            {{ $enquries->s_subject }}
                                                        </td>
                                                        <td>
                                                            {{ $enquries->s_qual }}
                                                        </td>
                                                        <td>
                                                            {{ $enquries->s_exp }}
                                                        </td>
                                                        <td>
                                                            {{ $enquries->s_work }}
                                                        </td>
                                                        <td>
                                                            {{ $enquries->s_serviceInterest }}
                                                        </td>
                                                        <td>
                                                            {{ $enquries->s_langTest }}
                                                        </td>
                                                        <td>
                                                            {{ $enquries->s_langScore }}
                                                        </td>
                                                        <td>
                                                            {{ $enquries->s_countryInterest }}
                                                        </td>

                                                        <td>@if($enquries->visited==1)Yes @elseif($enquries->visited==0)
                                                            No @endif </td>


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


</body>
</html>
