<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
      body {
        width: 100%;
        height: 100%;
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
      /*.watermark img {*/
      /*  height: 80%;*/
      /*}*/
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
        height: 170px;
        margin: auto;
        zoom: 60%;
      }
      .bottomheader-left {
        width: 60%;
        float: left;
      }
      .bottomheader-left img {
        /*height: 150px;*/
        width:40%;
      }
      .bottomheader-right {
          /*height: 150px;*/
        width: 60%;
        float: right;
        color: #00a504;
      }
      .bottomheader-right .company-name {
        font-weight: bold;
        font-size: 25px;
        padding-bottom: 5px;
      }
      .bottomheader-right .company-details {
        font-size: 20px;
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
        width: 30%;
        float: left;
      }
      .topbody-right {
        width: 35%;
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
      .text-amount {
        width: 100%;
        height: 30px;
        margin-top: 50px;
      }
      .text-amount .text-amount-in {
        width: 30%;
        float: right;
        font-weight: bold;
      }
      .paiddetails {
        width: 100%;
        height: 120px;
        margin-top: 50px;
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
      /*.signature {*/
      /*  width: 100%;*/
      /*  height: 208px;*/
      /*  margin-top: 50px;*/
      /*  font-weight: bold;*/
      /*}*/
      /*.signature-in {*/
      /*  width: 25%;*/
      /*  float: right;*/
      /*}*/
      /*.signature-line {*/
      /*  margin-top: 40px;*/
      /*}*/

      .footer {
        width: 100%;
        height: 60px;
        margin-top: 100px;
        background-color: #00a504;
        color: white;
      
      }
      .footer-left {
        width: 35%;
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
        width: 35%;
        float: left;
        font-size: 30px;
      }
      .footer-right {
        width: 30%;
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
  </head>
  <body >
    <div class="watermark">
      <img src="{{ asset('public/adminAssets/assets/img/gcn-watermark.png')}}" alt="gcn" />
    </div>
    
    <div class="maindiv" >
      <div class="topheader">
        <div class="topheader-left">Reg No. 138469/072/073</div>
        <div class="topheader-right">Pan No. 603524499</div>
      </div>
      <div class="bottomheader">
        <div class="bottomheader-left">
          <img src="{{ asset('public/adminAssets/assets/img/gcn-logo.png')}}" alt=""  />
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
      <div class="topbody">
          <div>Date: {{date("Y-M-d")}}</div>
        <div class="topbody-left">Payment Ref. No : {{$paymentref}}</div>
       
        <div class="topbody-right">Invoice Date : {{$expense->created_at}}</div>
      </div>
      <!--  -->
      <!--  --><br>
       <center><div style="font-size: 20px;;"><b><u>Cash Out Receipt</u></b></div></center>
      <div class="bodydiv">
        <div class="text-to">To</div>
        <div class="text-name">{{$expense->received_by}}</div>
        <div class="tablediv">
          <table cellspacing="0">
            <tr>
              <td class="scol">S.No.</td>
              <td class="bcol">Particular</td>
              <td class="scol">Amount</td>
            </tr>
            <tr>
              <td class="scol">#</td>
              <td class="bcol">{{$expense->expensecategory->expense_category_name}}</td>
              <td class="scol">{{$expense->amount}}</td>
            </tr>
          </table>
        </div>
        <div class="text-amount">
          <div class="text-amount-in">Amount Paid :{{$expense->amount}}</div>
        </div>
        <div class="paiddetails">
          <div class="paiddetails-left">
            <div>..............................</div>
            <div>Paid By</div>
            <div>Name :{{$expense->paid_by}}</div>
            <div>Paid Date :{{$expense->created_at}}</div>
          </div>
          <div class="paiddetails-right">
            <div>..............................</div>
            <div>Received By</div>
            <div>Name :{{$expense->received_by}}</div>
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
  </body>
</html>
