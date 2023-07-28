<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Taxweb</title>
  <style>
    @page { margin: 0mm; padding: 0mm; }
    .top_rw{ background-color:#f4f4f4; }
	.td_w{ }
	button{ padding:5px 10px; font-size:14px;}
    .invoice-box {
        max-width: 890px;
        margin: auto;
        padding:5px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 14px;
        line-height: 20px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }
    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
		border-bottom: solid 1px #ccc;
    }
    .invoice-box table td {
        padding: 5px;
        vertical-align:middle;
    }
    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }
    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }
    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }
    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }
    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
		font-size:12px;
    }
    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }
    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }
    .invoice-box table tr.item.last td {
        border-bottom: none;
    }
    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }
        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }
    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }
    .rtl table {
        text-align: right;
    }
    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
  </style>
</head>
<body>
  
  <div class="invoice-box">
    <table cellpadding="0" cellspacing="0">
<tr class="top_rw">
   <td style="width: 30%">
    <h2 style="margin-bottom: 0px;"> <img src="{{url('images')}}/Taxweb.png" height="50"></h2>
    <span style=""> Order id: {{$order->rzp_order_id ?? ''}} </span>
   </td>
   <td style="width: 40%">
    <h2 style="margin-bottom: 0px;text-align:center"> Tax Invoice</h2>
   </td>
    <td style="width:30%;text-align:right">
      <strong>Invoice No:</strong> {{$order->id ?? ''}} <br> 
      <strong>Date:</strong> {{$order->updated_at->format('d/m/Y') ?? ''}} <br>
   </td>
</tr>
        <tr class="top">
            <td colspan="3">
                <table>
                    <tr>
                        <td>
                            <b> From: </b> <br>
                            <strong>Taxweb India Private Limited</strong><br>
                            FF/110, Platinum Plaza Opp. Rajhans Cinema, <br>
                            New India Colony Road, Near Punjab National Bank, <br>
                            Nikol. <br>
                            Ahmedabad, Gujarat - 382350 <br>
                            <strong>PAN:</strong> AAICT2076N <br>
                            <strong>GSTIN:</strong> 24AAICT2076N1ZY <br>
                            <strong>CIN:</strong> U74999GJ2020PTC117940 <br>
                        </td>
                        <td style="vertical-align: baseline"> <b> To: </b><br>
                          @forelse ($order->name as $key=>$name)
                          @if($name == 'name')
                          <strong style="text-transform: capitalize">{{$order->data[$key]}}</strong><br>
                          @endif
                          @if($name == 'email')
                          {{$order->data[$key]}}<br>
                          @endif
                          @if($name == 'mobile')
                          {{$order->data[$key]}}<br>
                          @endif
                          @if($name == 'address')
                          <small>{{$order->data[$key]}}</small><br>
                          @endif
                          @if($name == 'pincode')
                          <small>{{$order->data[$key]}}</small><br>
                          @endif
                          @empty
                          <strong style="text-transform: capitalize">No details found</strong>
                          @endforelse
                    </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr class="information">
              <td colspan="3">
                <table>
                    <tr>
                        <td colspan="2">
          <b style="text-decoration:underline;"> Banking Details: </b> <br>
          <strong>Bank Name:</strong> State Bank Of India <br>
          <strong>Account No:</strong> 39930933815 <br>
          <strong>IFSC Code:</strong> SBIN0017900 <br>
                        </td>
                        <td colspan="2">
          <b style="text-decoration:underline;margin-bottom:10px"> Contact Details: </b> <br>
            <a href="https://www.taxweb.in" style="text-decoration: none">www.taxweb.in</a> <br>
            <a href="mailto:info@taxweb.in" style="text-decoration: none">info@taxweb.in</a> <br>
            <a href="tel:918866434060" style="text-decoration: none">+91 8866434060</a> <br>
                        </td>
                        
                    </tr>
                </table>
            </td>
        </tr>
                        <td colspan="5">
        <table cellspacing="0px" cellpadding="2px">
        <tr class="heading">
            <td style="width:35%;">
                PRODUCT
            </td>
            
    <td style="width:10%;text-align:center;">
                QTY.
            </td>
            <td></td>
            <td></td>
            <td></td>
     <td style=" text-align:right;">
               PRICE (INR)
            </td>
        </tr>
  <tr class="item">
           <td style="width:50%;">
            @forelse ($order->name as $key=>$name)
            @if($name == 'product')
            <strong>{{$order->data[$key]}}</strong> <br>
            @endif
            @empty 
            <strong>{{$order->service->name ?? ''}}</strong>
            @endforelse
            @forelse ($order->name as $key=>$name)
            @if($name !== 'name' && $name !== 'email' && $name !== 'mobile' && $name !== 'address' && $name !== 'product' && $name !== 'dscCost' && $name !== 'tokenName' && $name !== 'tokenPrice' && $name !== 'features' 
                && $name !== 'softwarePrice' && $name !== 'qty'  && $name !== 'quantity' && $name !== 'tokenCost' && $name !== 'courierCost' && $name !== 'pincode' && $name !== 'pvcPrice' && $name !== 'dscLink')
            <small>{{$order->data[$key]}}</small>, 
            
            @endif
            @empty
            @endforelse
            
            </td>
    <td style="width:10%; text-align:center;">
        @forelse ($order->name as $key=>$name)
            @if($name == 'qty' || $name == 'quantity')
                {{$order->data[$key] ?? 1}}
                @endif
                @empty 
                1
                @endforelse
            </td>
            <td></td>
            <td></td>
            <td></td>
     <td style="width:35%; text-align:right;">
        @if($order->product_price !== null)
        {{$order->product_price}}/-
        @else
        @foreach ($order->name as $key=>$name)
        @if($name == 'dscCost' || $name == 'tokenCost' || $name == 'softwarePrice' || $name = 'pvcPrice')
        {{$order->data[$key] ?? ''}}/-
        @endif
        @endforeach
        @endif
            </td>
        </tr>

        <tr style="text-align: right">
            <th colspan="5"style="text-align:right">Sub total:</th>
            <td><i class="fa fa-inr"></i>
                @if($order->product_price !== null)
        {{$order->product_price}}/-
        @else
                @foreach ($order->name as $key=>$name)
                @if($name == 'dscCost' || $name == 'tokenCost' || $name == 'softwarePrice' || $name = 'pvcPrice')
                {{$order->data[$key] ?? ''}}/-
                @endif
                @endforeach
                @endif
            </td>
          </tr>
          @foreach ($order->name as $key=>$name)
          @if($name == 'courierCost')
        <tr style="text-align: right">
            <th colspan="5"style="text-align:right">Shipping Charges:</th>
            <td><i class="fa fa-inr"></i>
                {{$order->data[$key] ?? ''}}/-
            </td>
        </tr>
        @endif
        @endforeach
          @if($order->gstNumber !== 'none')
          @if(substr($order->gstNumber, 0,2) != 24) 
          <tr style="text-align: right">
            <th colspan="5"style="text-align:right">IGST @18%:</th>
            <td><i class="fa fa-inr"></i>
                @if($order->product_price !== null)
        {{$order->product_price*18/100 ?? ''}}/-
        @else
                @foreach ($order->name as $key=>$name)
                @if($name == 'dscCost' || $name == 'tokenCost' || $name == 'softwarePrice' || $name = 'pvcPrice')
                {{($order->data[$key])*18/100 ?? ''}}/-
                @endif
                @endforeach
                @endif
            </td>
          </tr>
          @else
          <tr style="text-align: right">
            <th colspan="5"style="text-align:right">SGST @9%:</th>
            <td><i class="fa fa-inr"></i>
                @if($order->product_price !== null)
        {{$order->product_price*9/100 ?? ''}}/-
        @else
                @foreach ($order->name as $key=>$name)
                @if($name == 'dscCost' || $name == 'tokenCost' || $name == 'softwarePrice' || $name = 'pvcPrice')
                {{($order->data[$key])*9/100 ?? ''}}/-
                @endif
                @endforeach
                @endif
            </td>
          </tr>
          <tr style="text-align: right">
            <th colspan="5"style="text-align:right">CGST @9%:</th>
            <td><i class="fa fa-inr"></i>
                @if($order->product_price !== null)
        {{$order->product_price*9/100 ?? ''}}/-
        @else
                @foreach ($order->name as $key=>$name)
                @if($name == 'dscCost' || $name == 'tokenCost' || $name == 'softwarePrice' || $name = 'pvcPrice')
                {{($order->data[$key])*9/100 ?? ''}}/-
                @endif
                @endforeach
                @endif
            </td>
          </tr>
          @endif
          @else 
          <tr style="text-align: right">
            <th colspan="5"style="text-align:right">SGST @9%:</th>
            <td><i class="fa fa-inr"></i>
                @if($order->product_price !== null)
        {{$order->product_price*9/100 ?? ''}}/-
        @else
                @foreach ($order->name as $key=>$name)
                @if($name == 'dscCost' || $name == 'tokenCost' || $name == 'softwarePrice' || $name = 'pvcPrice')
                {{($order->data[$key])*9/100 ?? ''}}/-
                @endif
                @endforeach
                @endif
            </td>
          </tr>
          <tr style="text-align: right">
            <th colspan="5"style="text-align:right">CGST @9%:</th>
            <td><i class="fa fa-inr"></i>
                @if($order->product_price !== null)
        {{$order->product_price*9/100 ?? ''}}/-
        @else
                @foreach ($order->name as $key=>$name)
                @if($name == 'dscCost' || $name == 'tokenCost' || $name == 'softwarePrice' || $name = 'pvcPrice')
                {{($order->data[$key])*9/100 ?? ''}}/-
                @endif
                @endforeach
                @endif
            </td>
          </tr>

          @endif
          <tr style="text-align: right; border-top:1px solid black">
            <th colspan="5" style="width: 80%;font-size:15px;text-align:right">Total:</th>
            <td style="font-weight:bolder;font-size:20px"><i class="fa fa-inr"></i>{{round($order->amount,2) ?? ''}}/-</td>
          </tr>
        </td>
  </table>
        
  <tr>
     <td colspan="3">
       <table cellspacing="0px" cellpadding="2px">
        <tr>
              <td width="80%">
        <b> Declaration: </b> <br>
        <ul style="list-style-type: decimal">
            <li>This is a computer Generated Invoice and does not require a signature.</li>
            <li>Payment to be made by crossed Cheque/DD in favour of "TAXWEB INDIA PRIVATE LIMITED".</li>
            <li>Please obtain receipts against all payment made.</li>
            <li>For invoice related queries kindly contact via email : info.taxweb.in</li>
            <li>All disputes are subjected to Ahmedabad jurisdication only.</li>
        </ul>
        </td>
        <td style="width: 20%">
            <br>
            {{-- <img src="{{url('images')}}/sign.png" height="50"> --}}
            <br>
           <b> Authorized Signature </b>
        </td>
          </tr>
       <tr>
              <td width="20%">
        </td>
        <td>
            
          <br>
          <br>
          <br>
        </td>
          </tr>
       </table>
     </td>
  </tr>
    </table>
</div>
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script>
    $(document).click(function(){
        javascript:window.print();
    });
</script>
</body>
</html>