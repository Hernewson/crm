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

    
    <div class="page-content" style="min-height:583.8889px " >
					
                <div style="box-shadow: 10px 10px 6px -5px black;  padding:0px 50px" >
						<div>
							<div style="margin:10px 130;" >
								<address style="margin-top: 18px;">
									<img src="{{ asset('public/adminAssets/assets/img/gcn.png')}}" alt="logo"  style="height:9vh; width:auto;"><br/>
									Address:Pragati Marg(Way to liberty College)<br/>
									Call Us:+977-9801004752
								</address>
							</div>
						</div>
						<br/>
						<div>
    						<div style="float:right">
    							
                                        Invoice Date:{{$expense->created_at}}<br/>
                                        Expense Id  :{{$expense->id}}
                                   
    	                    </div><br/><br/>
    	                    <h2 colspan=2; style="color:#2d862d;margin:0px 130px;">Cash Out Slip</h2>

						</div>
                    
                    <br/><br/>
                    
                    <div >
							<div style="float:left">
									To <br>
									<strong style="font-size: 22px;">{{$expense->received_by}}</strong> <br>
                            </div>

							
					</div>
					<br/><br/><br/><br/><br/>

                    <div class="row">
						<div class="col-md-12">
							<div class="table-responsive m-t-40">
								<table class="table table-hover">
									<thead style="background-image:linear-gradient(to right, rgba(180, 230, 2,0.5), rgba(54, 212, 6,1));">
										<tr style="font-size:16px;">
											<td class="text-center"><strong>S.No.</strong></td>
											<td class="text-center"><strong>Particular</strong></td>
											<td class="text-center"><strong>Amount</strong></td>
										</tr>
									</thead>
									<tbody>

										<tr>
                                            <td>#</td>
                                            <td>{{$expense->expensecategory->expense_category_name}}</td>
                                            <td>{{$expense->amount}}</td>
                                        </tr>
                                    </tbody>
								</table>
							</div>
						</div>
					</div>
					<br/><br/>

                    <div class=" row ">
						
						   

							<div style="float:right">
								
								<div>
                                    <h3 style="background-image:linear-gradient(to right, rgba(180, 230, 2,0.5), rgba(54, 212, 6,1))"><b>Amount Paid:</b> {{$expense->amount}}</h3>
								</div>
							</div>
							
							
						
                    </div>
                    <br/><br/><br/>
                    <br/><br/><br/>
                    
					<div class="row">
							<div style="float:left">
								................................<br/>
								Paid By: <br/>
								Name:{{$expense->paid_by}} <br/>
        						Paid Date:{{$expense->created_at}} <br/>
							</div>

							<div>
								<div style="float:right">
								..................................... <br/>
								Received By: <br/>
								Name:{{$expense->received_by}} <br/>
								</div>
							</div>

					</div>

            
            <br>
            <br>
            <br><br>
            <br><br>
            <br>
            <br>
            <br><br>
            <br><br>
            <br>
            <br>



            <div class='row'>
            <div class='col-12' style="float:right">
                <p><strong>Signature</strong></p>
                <br>
                <p>............................................</p>
            </div>
        </div>
    </div>
    </div>

</body>
</html>
