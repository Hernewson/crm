@extends('admin.layouts.admin_design')

@section('title')  Invoice  @endsection

@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
			

				<div id="printDiv">
    <div class="watermark">
      <img src="{{ asset('public\adminAssets\assets\img\gcn-watermark.png')}}" alt="gcn" />
    </div>
    <div class="maindiv">
      <div class="topheader">
        <div class="topheader-left">Reg No. 138469/072/073</div>
        <div class="topheader-right">Pan No. 603524499</div>
      </div>
      <div class="bottomheader">
        <div class="bottomheader-left">
          <img src="{{ asset('public\adminAssets\assets\img\gcn-logo.png')}}" alt="" />
        </div>
        <div class="bottomheader-right">
          <div class="company-name">
            Green Computing Nepal Pvt. Ltd.
          </div>
          <div class="company-details">
            Adwait Marg, Bagbazar
          </div>
          <div class="company-details">
            G.P.O Box No.23792, Kathmandu, Nepal
          </div>
          <div class="company-details">
            Phone :- 01-6923449
          </div>
          <div class="company-details">
            Email : greencomputingnepal@gmail.com
          </div>
          <div class="company-details">
            Website : www.gcn.com.np
          </div>
        </div>
      </div>
      <div class="greenline"><hr /></div>
      <div class="title-body"><u>Cash In Slip</u></div>
      <div class="topbody">
        <div class="topbody-left"> Payment Reference:{{$lastpayment->payment_code}}</div>
        
        <div class="topbody-middle">Invoice Date :{{$lastpayment->created_at}}</div>
        <div class="topbody-right">Customer Id : {{$student->id}}</div>
      </div>
      <!--  -->
      <!--  -->
      <div class="bodydiv">
        <div class="text-to">To</div>
        <div class="text-name">{{$student->fname}}  {{$student->lname}}</div>
        <div class="text-name">{{$student->address}}</div>
        <div class="text-name">{{$student->email}}</div>
        <div class="text-name">{{$student->phone}}</div>
        <div class="tablediv">
          <table cellspacing="0">
            <tr>
              <td class="scol">S.No.</td>
              <td class="bcol">Particular</td>
              <td class="scol">Amount</td>
            </tr>
            <tr>
              <td class="scol">#</td>
              <td class="bcol">{{$lastpayment->payment_title}}</td>
              <td class="scol">Rs. {{$lastpayment->amount_paid}}</td>
            </tr>
          </table>
        </div>
        <div class="pament-method">
          <div><b>Payment Method</b></div>
          <div>{{$lastpayment->mode_of_payment}}</div>
        </div>
        <div class="text-amount">
          <div class="text-amount-in">
            <div>Total Amount paid : {{$totalamountpaid}}</div>
            <div>Amount paid : {{$lastpayment->amount_paid}}</div>
            <div>Due: Rs. {{$student->due}}</div>
          </div>
        </div>
        <div class="paiddetails">
          <div class="paiddetails-left">
            <div>..............................</div>
            <div>Paid By</div>
            <div>Name : {{$lastpayment->paid_by}}</div>
            <div>Paid Date : {{$lastpayment->created_at}}</div>
          </div>
          <div class="paiddetails-right">
            <div>..............................</div>
            <div>Received By</div>
            <div>Name : {{$lastpayment->received_by}}</div>
          </div>
        </div>
      </div>
      <!--  -->
      <!--  -->
      <div class="footer">
        <div class="footer-left"><hr /></div>
        <div class="footer-middle">&nbsp;www.gcn.com.np</div>
        <div class="footer-right"><hr /></div>
        
      </div>
        </div>  
        </div>
      <div class="text-right"style="background:#eee;">
									<button onclick="divprint()" class="btn btn-default btn-outline" type="button"> <span><i class="fa fa-print"></i> Print</span> </button>
								</div>
    </div>
    </div>
    
    
    
    
 @endsection

@section('css')
    <style>
      body {
        width: 100%;
        height: 141%;
        font-family: calibri;
        margin: 0;
      }
      .watermark {
        position: absolute;
        top: 30%;
        left: 20%;
        z-index: -1;
        opacity: 0.1;
      }
      .watermark img {
        height: 500px;
      }
      .topheader {
        width: 90%;
        height: 50px;
        padding-top: 15px;
        margin: auto;
        font-weight: bold;
      }
      .topheader-left {
        width: 50%;
        float: left;
      }
      .topheader-right {
        width: 50%;
        float: right;
        text-align: right;
      }
      .bottomheader {
        width: 90%;
        height: 250px;
        margin: auto;
        zoom: 60%;
      }
      .bottomheader-left {
        width: 60%;
        float: left;
      }
      .bottomheader-left img {
        height: 200px;
      }
      .bottomheader-right {
        width: 40%;
        float: right;
        color: #00a504;
      }
      .bottomheader-right .company-name {
        font-weight: bold;
        font-size: 35px;
        padding-bottom: 5px;
      }
      .bottomheader-right .company-details {
        font-size: 25px;
      }
      .greenline {
        width: 100%;
        height: 50px;
      }
      .greenline hr {
        width: 100%;
        height: 6px;
        margin-top: 10px;
        border: none;
        background-color: #00a504;
      }
      .title-body {
        width: 20%;
        height: 50px;
        margin: auto;
        font-size: 20px;
        font-weight: bold;
        /* zoom: 60%; */
      }
      .topbody {
        width: 85%;
        height: 50px;
        margin: auto;
        font-size: 20px;
        font-weight: bold;
        /* zoom: 60%; */
      }
      .topbody-left {
        width: 35%;
        float: left;
      }
      .topbody-middle {
        width: 35%;
        float: left;
      }
      .topbody-right {
        width: 30%;
        float: right;
      }
      .bodydiv {
        width: 80%;
        margin: auto;
        font-size: 20px;
      }
      .text-to {
        width: 100%;
        height: 30px;
        margin-top: 50px;
        font-weight: bold;
      }
      .text-name {
        width: 100%;
        height: 30px;
        font-weight: bold;
      }
      .tablediv {
        width: 100%;
        margin-top: 50px;
      }
      .tablediv table {
        width: 100%;
        border: 1px solid black;
        text-align: center;
      }
      .tablediv table tr td {
        border: 1px solid black;
      }
      .tablediv table .scol {
        width: 20%;
      }
      .pament-method {
        width: 100%;
        height: 50px;
        margin-top: 50px;
      }
      .text-amount {
        width: 100%;
        height: 50px;
        margin-top: 30px;
      }
      .text-amount .text-amount-in {
        width: 40%;
        float: right;
        font-weight: bold;
      }
      .paiddetails {
        width: 100%;
        height: 120px;
        margin-top: 100px;
        font-weight: bold;
      }
      .paiddetails-left {
        width: 75%;
        float: left;
      }
      .paiddetails-right {
        width: 25%;
        float: right;
      }

      .footer {
        width: 100%;
        height: 60px;
        margin-top: 100px;
        background-color: #00a504;
        color: white;
        zoom: 60%;
      }
      .footer-left {
        width: 40%;
        float: left;
        padding-top: 20px;
      }
      .footer-left hr {
        width: 100%;
        height: 6px;
        margin-top: 7px;
        border: none;
        background-color: white;
      }
      .footer-middle {
        width: 20%;
        float: left;
        font-size: 36px;
      }
      .footer-right {
        width: 40%;
        float: right;
        padding-top: 20px;
      }
      .footer-right hr {
        width: 100%;
        height: 6px;
        margin-top: 7px;
        border: none;
        background-color: white;
      }
    </style>

<link href="{{asset('public/adminAssets/assets/plugins/select2/css/select2.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('public/adminAssets/assets/plugins/select2/css/select2-bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('public/adminAssets/assets/plugins/select2/css/invoice.css')}}" rel="stylesheet" type="text/css" />
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
   

    function divprint(){
     var printContents = document.getElementById('printDiv').innerHTML;
     var originalContents = document.body.innerHTML;
     document.body.innerHTML = printContents;
     window.print();
     document.body.innerHTML = originalContents;
};

 </script>



@endsection





