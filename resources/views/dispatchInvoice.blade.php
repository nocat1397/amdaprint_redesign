<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>AmdaPrints</title>
  <style>
    @page { margin: 0mm; padding: 0mm; }
    .top_rw{ background-color:#f4f4f4; }
	.td_w{ }
	button{ padding:5px 10px; font-size:14px;}
    .invoice-box {
        max-width: 890px;
        margin: auto;
        padding:0px;
        border: 1px solid #eee;
        /* box-shadow: 0 0 10px rgba(0, 0, 0, .15); */
        font-size: 14px;
        line-height: 20px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }
    hr {
        border: 0.5px solid #ccc!important;
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
    <table cellpadding="0" cellspacing="0" style="border: unset">
<tr class="top_rw">
   <td style="width: 35%">
    <h2 style="margin-bottom: 0px;"> <img src="{{url('assets')}}/images/New/logo.png" height="40"></h2>
    <span style=""> <strong>Order id:</strong> {{'amdaprints_'.bin2hex('order').$order->id ?? ''}} </span>
   </td>
   <td style="width: 35%">
    <h2 style="margin-bottom: 0px;text-align:center">Shipping Invoice</h2>
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
                            {!! QrCode::size(150)->generate(env('SUB_DOMAIN').'/orderDetails/'.encrypt($order->id)); !!}
                            {{-- <strong>PAN:</strong> AAICT2076N <br>
                            <strong>GSTIN:</strong> 24AAICT2076N1ZY <br>
                            <strong>CIN:</strong> U74999GJ2020PTC117940 <br> --}}
                        </td>
                        <td style="vertical-align: baseline"> <b style="color: #000;font-weight:700"> SHIP TO: </b><br>
                          <strong style="text-transform: capitalize">{{$order->shipping['fname'] ?? ''}} {{$order->shipping['lname'] ?? ''}}</strong><br>
                          {{$order->payer_email}}<br>
                          {{$order->shipping['phone'] ?? ''}}<br>
                          <small>{{$order->shipping['address'] ?? ''}}</small><br>
                          <small>{{$order->shipping['zip'] ?? ''}}</small><br>
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
                            <b style="color: #000;font-weight:700"> SHIP FROM: </b> <br>
                            <strong>VIBGYOR PRINTS LLC</strong><br>
                            16192, Coastal Highway ,Lewes , Delaware 19958 <br>
                            USA <br>
                        </td>
                        <td colspan="2">
                            <b style="text-decoration:underline;margin-bottom:10px"> Contact Details: </b> <br>
                            <a href="https://amdaprints.com/" style="text-decoration: none">amdaprints.com/</a> <br>
                            <a href="mailto:info@amdaprints.com" style="text-decoration: none">info@amdaprints.com</a> <br>
                            <a style="text-decoration: none">+1 (302) 262-5168</a> <br>
                        </td>
                        
                    </tr>
                </table>
            </td>
        </tr>
        <td colspan="5">
        <table cellspacing="0px" cellpadding="2px" style="border-bottom:none">
        <tr class="heading">
            <td style="width:35%;">
                PRODUCT
            </td>
            
    <td style="width:10%;text-align:center;">
                QUANTITY
            </td>
            <td></td>
            <td></td>
            <td></td>
     <td style=" text-align:right;">
               AMOUNT
            </td>
        </tr>
  <tr class="item">
           <td style="width:50%;">
            @forelse ($order->name as $key=>$name)
            @if($name == 'name')
            <strong>{{$order->data[$key]}}</strong> <br>
            @endif
            @empty 
            {{-- <strong>{{$order->service->name ?? ''}}</strong> --}}
            @endforelse
            <hr>
            @forelse ($order->name as $key=>$name)
            @if($name !== 'name' && $name !== 'category' && $name !== 'amount' && $name !== 'qty' && $name !== 'img' && $name !== 'route')
            <small><strong>{{$name}}</strong> {{$order->data[$key] ?? 'No'}}</small>, 
            
            @endif
            @empty
            @endforelse
            
            </td>
    <td style="width:10%; text-align:center;">
        @foreach ($order->name as $key=>$name)
            @if($name == 'qty' || $name == 'quantity')
                {{$order->data[$key] ?? 1}}
                @endif
                @endforeach
            </td>
            <td></td>
            <td></td>
            <td></td>
     <td style="width:35%; text-align:right;">
        @foreach ($order->name as $key=>$name)
        @if($name == 'amount')
        ${{$order->data[$key] ?? ''}}/-
        @endif
        @endforeach
            </td>
        </tr>

        <tr style="text-align: right">
            <th colspan="5"style="text-align:right">Sub total:</th>
            <td><i class="fa fa-inr"></i>
                @foreach ($order->name as $key=>$name)
                @if($name == 'amount')
                ${{$order->data[$key] ?? ''}}/-
                @endif
                @endforeach
            </td>
          </tr>
        <tr style="text-align: right">
            <th colspan="5"style="text-align:right">Shipping Charges:</th>
            <td><i class="fa fa-inr"></i>
                ${{$order->shipping_rate ?? ''}}/-
            </td>
        </tr>
          <tr style="text-align: right; border-top:1px solid black">
            <th colspan="5" style="width: 80%;font-size:15px;text-align:right">Total:</th>
            <td style="font-weight:bolder;font-size:20px"><i class="fa fa-inr"></i>${{round($order->amount,2) ?? ''}}/-</td>
          </tr>
        </td>
  </table>

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