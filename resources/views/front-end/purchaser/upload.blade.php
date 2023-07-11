<!DOCTYPE html>
<html lang="en">
<head>
    @include('front-end.section.styles')
    <style>
        #couponCode::placeholder {
            font-size: 14px;
            font-weight: 400;
        }
        .spinner-border {
            display: none;
        }
        /* hide arrows
 Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none !important;
  margin: 0 !important;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield !important;
}
    </style>
</head>
<body>
    @include('front-end.section.header')
    <main>
    <section class="details_section shop_details sec_ptb_130 pt-130 bg_gray clearfix" id="upload">
        <div class="">
            <div class="container text-center">
                <div class="row justify-content-center">
                    <div class="col-md-6 mb-5">
                        <div class="card shadow">
                            <div class="card-header bg_default_blue">
                                <h5 class="text-white">File Upload</h5>
                            </div>
                            <div class="card-body">
                                @if(session()->has('message'))
                                    <div class="alert alert-success" id="success">
                                        {{ session()->get('message') }}
                                    </div>
                                @endif
                                <form id="uploadFileForm" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="cart_id" value="{{$cart->id}}" id="upload_cart_id">
                                    <input type="hidden" name="user_id" value="{{Auth::user()->id ?? ''}}" id="upload_user_id">
                                    <div class="form-group">
                                        <div class="custom-file">
                                          <input type="file" class="custom-file-input" id="inputGroupFile02" name="file">
                                          <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                      <button class="custom_btn bg_default_yellow shadow" id="uploadClick">Upload <i class="pl-2 fa fa-upload"></i></button>
                                    </div>
                                </form>
                                <p class="filePathName pt-2"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card border-0 shadow">
                            <div class="card-header bg_default_blue">
                                <h5 class="text-white">Order Summary</h5>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-bordered mb-0">
                                    <thead>
                                        <tr>
                                            @foreach ($cart->name as $key=>$name)
                                            @if($name !== 'route' && $name !== 'img')
                                            <th class="text-capitalize">{{$name}}</th>
                                            @endif
                                            @endforeach
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            @foreach ($cart->name as $key=>$name)
                                            @if($name !== 'route' && $name !== 'img')
                                            <td>@if($name == 'amount') $ @endif{{$cart->data[$key] !== null ? $cart->data[$key] : 'No'}}</td>
                                            @endif
                                            @endforeach
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer">
                                <button class="addtocart_btn custom_btn bg_default_orange" type="button" id="shippingBtn">Review Product Summary</button>
                            </div>
                        </div>
                    </div>
                    {{--  <div class="col-md-6">
                        <div class="card border-0 shadow">
                            <div class="card-header bg_default_blue">
                                <h5 class="text-white">Order Summary</h5>
                            </div>
                            <div class="card-body p-0">
                                <table class="table table-bordered mb-0">
                                    @foreach ($cart->name as $key=>$name)
                                    <tr>
                                        @if($name !== 'route' && $name !== 'img')
                                        <td class="text-capitalize">{{$name}}</td>
                                        <td>@if($name == 'amount') $ @endif{{$cart->data[$key]}}</td>
                                        @endif
                                    </tr>
                                    @endforeach
                                    <tr>
                                        <td><h5>TOTAL</h5> </td>
                                        <td><h5>$ {{$cart->amount}}</h5></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="card-footer">
                                <button class="addtocart_btn custom_btn bg_default_orange" type="button" id="shippingBtn">Review Product Summary</button>
                            </div>
                        </div>
                    </div>  --}}
                </div>
            </div>
        </div>
    </section>
    
    <section class="details_section shop_details sec_ptb_130 pt-130 bg_gray clearfix" id="uploadCheckout">
        <div class="">
            <div class="container text-center">
                <div class="row">
                    
                    <div class="col-md-8">
                        <div class="card bg-gray border border-1 mb-5">
                            <div class="card-header bg_default_orange d-md-none d-lg-none d-sm-none d-block">
                                <strong class="text-light"><span class="float-left">Details</span> <button class="float-right addtocart_btn custom_btn bg_default_yellow shippingBack" type="button"><i class="pr-3 fa fa-arrow-left"></i> Back</button></strong>
                            </div>
                            <div class="card-body table-responsive border border-0 p-0 d-md-none d-lg-none d-sm-none d-block">
                                <table class="table table-stripped text-center">
                                    <tbody>
                                        @foreach($cart->name as $key=>$name)
                                        @if($name !== 'route' && $name !== 'img')
                                        <tr>
                                         <th class="text-capitalize">{{$name}} :</th> 
                                        <td>@if($name == 'amount') $ @endif{{$cart->data[$key] !== null ? $cart->data[$key] : 'No'}}</td>
                                    </tr>
                                    @endif
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-body table-responsive border border-0 p-0 d-md-block d-lg-block d-sm-block d-none">
                                <table class="table table-hover text-left mb-0 table-lg" style="width: 100%">
                                    <thead class="bg_default_blue text-light">
                                        <tr>
                                            {{-- <th></th> --}}
                                            <th rowspan="2">NAME</th>
                                            <th>PRICE</th>
                                            <th>QUANTITY</th>
                                            <th>SUBTOTAL</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            @foreach ($cart->name as $key=>$name)
                                            @if($name == 'category')
                                            <input type="hidden" name="category" value="{{$cart->data[$key]}}">
                                            @endif
                                            @endforeach
                                            <td class="text-capitalize btn-group" style="align-items: center">
                                            @foreach ($cart->name as $key=>$name)
                                            @if($key == 5)
                                            <div>
                                                <img src="{{$cart->data[5]}}" height="80" width="80">
                                            </div>
                                            @endif
                                            @endforeach
                                            @foreach ($cart->name as $key=>$name)
                                            @if($key == 1)
                                            <div class="p-2">
                                                <strong class="">
                                                    {{$cart->data[1]}}
                                                </strong>
                                                {{--  <button type="button" class="btn btn-sm btn-transparent" data-toggle="modal" data-target="#details">Details ></button>  --}}
                                            </div>
                                            @endif
                                            @endforeach
                                            </td>
                                            @foreach ($cart->name as $key=>$name)
                                            @if($key == 2)
                                            <td style="vertical-align: middle">@if($name == 'amount') <strong>$</strong> @endif{{$cart->data[$key]}}</td>
                                            @endif
                                            @endforeach
                                            @foreach ($cart->name as $key=>$name)
                                            @if($key == 4)
                                            <td style="vertical-align: middle">{{$cart->data[$key]}}</td>
                                            @endif
                                            @endforeach
                                            @foreach ($cart->name as $key=>$name)
                                            @if($key == 2)
                                            <td style="vertical-align: middle">@if($name == 'amount') <strong>$</strong> @endif{{$cart->data[$key]}}</td>
                                            @endif
                                            @endforeach
                                        </tr>
                                    </tbody>
                                  
                                </table>
                                <div class="col-md-12 text-justify">
                                    <hr class="mt-1 mb-3">
                                    <div>
                                        <h5>Product Description :</h5>
                                    </div>
                                    <hr class="mt-1 mb-3">
                                    <div class="pb-3">
                                        @foreach($cart->name as $key=>$name)
                                        @if($name !== 'route' && $name !== 'img')
                                        <strong class="text-capitalize" style="color:#443266"> {{$name}}:</strong>
                                        @if($name == 'amount') $ @endif{{$cart->data[$key] !== null ? $cart->data[$key] : 'No'}}
                                        @endif
                                        @endforeach
                                    </div>
                                    
                                </div>
                            </div>
                            
                        </div>
                        <div class="btn-inline mt-3 d-md-block d-lg-block d-sm-block d-none">
                            <button class="addtocart_btn custom_btn bg_default_orange float-left shippingBack" type="button"><i class="pr-3 fa fa-arrow-left"></i> Back</button>
                            {{-- <button class="addtocart_btn custom_btn bg_default_yellow float-right" type="submit" id="shippingNext">Proceed to Checkout <i class="fa fa-arrow-right pl-2"></i></button> --}}
                        </div>
                    <div class="modal fade" id="details" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                          <div class="modal-content">
                              <div class="card bg-gray border border-0 p-0">
                                <div class="card-header bg_default_blue">
                                    <h5 class="text-white">Product Details</h5>
                                </div>
                                <div class="card-body table-responsive text-left border border-0 p-0">
                                    <table class="table table-stripped text-center">
                                        <tbody>
                                            <thead>
                                                <tr>
                                                @foreach($cart->name as $key=>$name)
                                                @if($name !== 'route' && $name !== 'img')
                                                <th class="text-capitalize">{{$name}}</th>
                                                {{--  <td>@if($name == 'amount') $ @endif{{$cart->data[$key]}}</td>  --}}
                                                @endif
                                                @endforeach
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                @foreach($cart->name as $key=>$name)
                                                @if($name !== 'route' && $name !== 'img')
                                                {{--  <th class="text-capitalize">{{$name}}</th>  --}}
                                                <td>@if($name == 'amount') $ @endif{{$cart->data[$key] !== null ? $cart->data[$key] : 'No'}}</td>
                                                @endif
                                                @endforeach
                                            </tr>
                                            </tbody>
                                            
                                                </tbody>
                                            </table>
                                        </div>
                                {{--  <div class="card-body text-left border border-0 p-0">
                                    <table class="table table-stripped text-center">
                                        <tbody>
                                            @foreach($cart->name as $key=>$name)
                                            @if($name !== 'route' && $name !== 'img')
                                            <tr>
                                                <th class="text-capitalize">{{$name}}</th>
                                                <td>@if($name == 'amount') $ @endif{{$cart->data[$key]}}</td>
                                            </tr>
                                            @endif
                                            @endforeach
                                                </tbody>
                                            </table>
                                        </div>  --}}
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-gray border border-0 shadow">
                        <div class="card-body border border-0">
                            {{-- <div class="row">
                                <div class="col-md-6 text-left">
                                    <strong class="text-dark">Product</strong>
                                </div>
                                <div class="col-md-6 text-right">
                                    <strong class="text-dark">Price</strong>
                                </div>
                            </div> --}}
                            
                            {{-- <hr class="mt-2 mb-2"> --}}
                            <div class="card-header border text-left shadow bg_default_orange">
                                <strong class="text-light">
                                    Shipping Method
                                </strong>
                            </div>
                            <hr class="mt-2 mb-2">
                            <div class="text-left font-weight-light">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="shipping" value="{{$priority}}" id="shipping1" checked>
                                    <div class="form-row">
                                        <div class="col-md-6 col-sm-6 col-6">
                                            <label class="form-check-label" for="shipping1">    
                                                <strong class="font-weight-none">Priority</strong>
                                            </label>
                                        </div>
                                        {{-- <div class="col-md-4">
                                        </div> --}}
                                        <div class="col-md-6 col-sm-6 col-6 text-right">
                                            <label class="form-check-label" for="route1">    
                                                <strong class="font-weight-bold text-dark">${{$priority}}</strong>
                                            </label>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="shipping" value="{{$express}}" id="shipping2">
                                    <div class="form-row">
                                        <div class="col-md-6 col-sm-6 col-6">
                                            <label class="form-check-label" for="shipping2">    
                                                <strong class="text-">Express</strong>
                                            </label>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-6 text-right">
                                            <label class="form-check-label" for="route1">    
                                                <strong class="font-weight-bold text-dark">${{$express}}</strong>
                                            </label>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="shipping" value="{{$standard}}" id="shipping3">
                                    <div class="form-row">
                                        <div class="col-md-6 col-sm-6 col-6">
                                            <label class="form-check-label" for="shipping3">    
                                                <strong class="text-">Standard Ground</strong>
                                            </label>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-6 text-right">
                                            <label class="form-check-label" for="route1">    
                                                <strong class="font-weight-bold text-dark">${{$standard}}</strong>
                                            </label>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="shipping" value="{{$saver}}" id="shipping4">
                                    <div class="form-row">
                                        <div class="col-md-6 col-sm-6 col-6">
                                            <label class="form-check-label" for="shipping4">    
                                                <strong class="text-">Super Saver</strong>
                                            </label>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-6 text-right">
                                            <label class="form-check-label" for="route1">    
                                                <strong class="font-weight-bold text-dark">{{$saver > 0 ? '$'.$saver : 'FREE' }}</strong>
                                            </label>
                                        </div>
                                    </div>
                                  </div>
                        </div>
                        <hr class="mt-2 mb-2">
                        
                    <div class="row mt-2">
                        <form action="">

                            <div class="col-md-12">
                                <div class="input-group mb-3">
                                    <input type="text" name="coupon" placeholder="Enter Coupon Code" class="form-control" id="couponCode">
                                    <div class="input-group-append pl-3">
                                        <button class="addtocart_btn custom_btn bg_default_yellow w-100" type="button" id="couponCheck">Apply</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="row">
                        @foreach ($cart->name as $key=>$name)
                        @if($name == 'category')
                            <input type="hidden" name="category" value="{{$cart->data[$key]}}">
                        @endif

                            @if($name !== 'route')
                            @if($key == 2)
                            <div class="col-md-6 col-sm-6 col-6 text-dark font-weight-bold text-left text-capitalize">Subtotal:</div>
                            <div class="col-md-6 col-sm-6 col-6 text-dark text-right">@if($name == 'amount') <strong>$</strong> @endif{{$cart->data[$key]}}</div>
                            @endif
                            @endif
                            
                            @endforeach
                            <div class="col-md-6 col-sm-6 col-6 text-dark font-weight-bold text-left text-capitalize">Shipping Charge:</div>
                            <div class="col-md-6 col-sm-6 col-6 text-dark text-right"><strong>$</strong> <span class="totalShipping">{{$priority}}</span></div>
                            <div class="col-md-6 col-sm-6 col-6 text-left discount d-none">
                                <strong class="text-dark">Discount :</strong>
                            </div>
                            <div class="col-md-6 col-sm-6 col-6 text-right discount d-none" id="couponDiscount">
                            </div>
                        </div>
                    <hr class="mt-2 mb-2">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-6 text-left">
                            <h5 class="text-dark">Total :</strong>
                        </div>
                        <div class="col-md-6 col-sm-6 col-6 text-right">
                            <h5 class="font-weight-bold text-dark">$ <span class="grandTotal">{{$cart->amount}}</span></h5>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <button class="addtocart_btn custom_btn bg_default_orange w-auto shadow" type="submit" id="shippingNext">Proceed to Checkout <i class="fa fa-arrow-right pl-2"></i></button>
                    </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="details_section shop_details sec_ptb_130 pt-130 bg_gray clearfix" id="uploadCheckout2">
        <div class="">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card border-0">
                            <div class="card-header bg_default_blue">
                                <h5 class="text-white">Shipping & Billing Address</h5>
                            </div>
                            <div class="card-body text-left">
                                <form action="/charge" method="POST" data-stripe-publishable-key="{{ env('STRIPE_PUBLIC_KEY') }}">
                                    @csrf
                                    <input type="hidden" name="route" value="0">
                                    <input type="hidden" name="discountAmount" value="0">
                                    <input type="hidden" name="couponUsed" value="0">
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <label for="">First Name<span class="text-danger">*</span></label>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="fname" value="{{strtok(Auth::user()->name ?? '',' ')}}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="">Last Name<span class="text-danger">*</span></label>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="lname" value="{{strrchr(Auth::user()->name ?? '',' ')}}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Company Name</label>
                                        <input type="text" class="form-control" name="company">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Address<span class="text-danger">*</span></label>
                                        <textarea name="address" class="form-control" cols="30" rows="3" required>{{Auth::user()->address ?? ''}}</textarea>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <label for="">Zip Code<span class="text-danger">*</span><div class="ml-3 spinner-border spinner-border-sm text-danger" role="status">
                                                <span class="sr-only">Loading...</span>
                                              </div></label>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="zip" required id="zipcode">
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="">City<span class="text-danger">*</span></label>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="city" required id="cityCheck" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <label for="">State/Province<span class="text-danger">*</span></label>
                                            <div class="form-group">
                                                <input type="text" name="state" class="form-control" id="stateCheck" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="">Country<span class="text-danger">*</span></label>
                                            <div class="form-group">
                                                <select class="w-100 mb-3" required name="country" aria-label="country" disabled>
                                                    <option value="United States" selected>United States</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="">Phone Number<span class="text-danger">*</span></label>
                                            <div class="form-group">
                                                <input type="number" class="form-control" name="phone" value="{{Auth::user()->mobile ?? ''}}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" name="cart_id" value="{{$cart->id}}">
                                        <input type="hidden" name="amount" value="{{$cart->amount}}">
                                        <button class="addtocart_btn custom_btn bg-dark" type="button" id="shippingBack2"><i class="fa fa-arrow-left pr-2"></i> Back</button>
                                        
                                        <button class="addtocart_btn custom_btn bg_default_orange float-right" id="card-button" type="submit">Proceed to Pay <i class="fa fa-arrow-right pl-2"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
    
    @include('front-end.section.footer')
    @include('front-end.section.scripts')
    <script src="https://js.stripe.com/v3/"></script>

    
    <script>
        $('#zipcode').on('input',(function() {
            $.ajaxSetup({
                headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var zipcode = $(this).val();
            // alert(zipcode.length);
            if(zipcode.length > 4)
            {
                $('.spinner-border').css('display','inline-block');
            }
            $.ajax({
				type: "POST",
				url: "/usa-find",
				data: {zipcode:zipcode},
				
				success:function(response) 
                {
                    console.log(response);
                    if(response !== null)
                    {
                       $('#cityCheck').val(response.city);
                       $('#stateCheck').val(response.state);
                       $('.spinner-border').css('display','none');
                    } else {
                        swal({
                            title: "Enter correct zipcode",
                            type: "error",  
                            timer: 3000,
                            text: 'Something went wrong!',
                            showCancelButton: false,
                            showConfirmButton: false
                        }); 
                    }
                },
                error: function(error){
					console.log(error)
				}

            });
        }));
        $(document).ready(function(){
            var shipping = $('input[name="shipping"]:checked').val();
            $('#uploadCheckout').fadeOut();
            $('#uploadCheckout2').fadeOut();
            $('#shippingCharges').html(shipping);
            var total = parseFloat(shipping) + parseFloat(<?php echo $cart->amount ?>);
            $('.grandTotal').html(total.toFixed(2));
            $('input[name="amount"]').val(total.toFixed(2));
        });
        $('#shippingBtn').click(function(){
            $('#upload').fadeOut();
            $('#uploadCheckout').fadeOut();
            $('#uploadCheckout').fadeIn();
            window.scrollTo({ top: 50, left: 100, behavior: 'smooth' });
        });
        $('#shippingNext').click(function(){
            $('#upload').fadeOut();
            $('#uploadCheckout').fadeOut();
            $('#uploadCheckout2').fadeIn();
            window.scrollTo({ top: 50, left: 100, behavior: 'smooth' });
        });
        $('.shippingBack').click(function(){
            $('#uploadCheckout').fadeOut();
            $('#uploadCheckout2').fadeOut();
            $('#upload').fadeIn();
            window.scrollTo({ top: 50, left: 100, behavior: 'smooth' });
        });
        $('#shippingBack2').click(function(){
            $('#uploadCheckout2').fadeOut();
            $('#upload').fadeOut();
            $('#uploadCheckout').fadeIn();
            window.scrollTo({ top: 50, left: 100, behavior: 'smooth' });
        });
        $('#shipping1').click(function(){
            var shipping = $(this).val();
            $('#shippingCharges').html(shipping);
            $('.totalShipping').html(shipping);
            var total = parseFloat($(this).val()) + parseFloat(<?php echo $cart->amount ?>);
            $('.grandTotal').html((parseFloat(total)-parseFloat($('input[name="discountAmount').val())).toFixed(2));
            $('input[name="amount"]').val((parseFloat(total)-parseFloat($('input[name="discountAmount').val())).toFixed(2));
        });
        $('#shipping2').click(function(){
            var shipping = $(this).val();
            // alert(shipping);
            $('#shippingCharges').html(shipping);
            $('.totalShipping').html(shipping);
            var total = parseFloat($(this).val()) + parseFloat(<?php echo $cart->amount ?>);
            $('.grandTotal').html((parseFloat(total)-parseFloat($('input[name="discountAmount').val())).toFixed(2));
            $('input[name="amount"]').val((parseFloat(total)-parseFloat($('input[name="discountAmount').val())).toFixed(2));
        });
        $('#shipping3').click(function(){
            var shipping = $(this).val();
            $('#shippingCharges').html(shipping);
            $('.totalShipping').html(shipping);
            var total = parseFloat($(this).val()) + parseFloat(<?php echo $cart->amount ?>);
            $('.grandTotal').html((parseFloat(total)-parseFloat($('input[name="discountAmount').val())).toFixed(2));
            $('input[name="amount"]').val((parseFloat(total)-parseFloat($('input[name="discountAmount').val())).toFixed(2));
        });
        $('#shipping4').click(function(){
            var shipping = $(this).val();
            $('#shippingCharges').html(shipping);
            $('.totalShipping').html(shipping);
            var total = parseFloat($(this).val()) + parseFloat(<?php echo $cart->amount ?>);
            $('.grandTotal').html((parseFloat(total)-parseFloat($('input[name="discountAmount').val())).toFixed(2));
            $('input[name="amount"]').val((parseFloat(total)-parseFloat($('input[name="discountAmount').val())).toFixed(2));
        });
        $('#couponCheck').one('click',function(){
            $.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
			var code = $('#couponCode').val();
            var cat = $('input[name="category"]').val();
            
            $.ajax({
				type: "POST",
				url: "/couponCheck",
				data: {code:code,category:cat},
				
				success:function(response) {
                    if(response !== '0')
                    {
                        var amount = $('input[name="amount"]').val();
                        var total = parseFloat(amount)*parseFloat(response.discount)/parseFloat(100);
                        $('#couponDiscount').html('  $'+total.toFixed(2));  
                        $('#couponDiscount').addClass('text-danger font-weight-bold');
                        $('.discount').removeClass('d-none');
                        $('input[name="couponUsed"]').val(response.discount);
                        $('input[name="discountAmount"]').val(total.toFixed(2));
                        var grandTotal = $('.grandTotal').html();
                        $('.grandTotal').html((parseFloat(grandTotal)-parseFloat(total)).toFixed(2));
                        $('input[name="amount"]').val((parseFloat(grandTotal)-parseFloat(total)).toFixed(2));

                        swal({
                            title: "Coupon Applied!",
                            type: "success",  
                            timer: 3000,
                            text: '$'+total.toFixed(2),
                            showCancelButton: false,
                            showConfirmButton: false
                        }); 
                    } else {
                        swal({
                            title: "Invalid Coupon!",
                            type: "error",  
                            timer: 3000,
                            showCancelButton: false,
                            showConfirmButton: false
                        });
                    }
				},
				error: function(error){
					console.log(error)
				}
            });
        });
        $('#uploadFileForm').on('submit',(function(e) {
            $.ajaxSetup({
                headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
             
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
				type: "POST",
				url: "/upload",
				data: formData,
                processData: false,
                contentType: false,
				
				success:function(response) {
                    if(response > 0)
                    {
                        swal({
                            title: "File Uploaded!",
                            type: "success",  
                            timer: 1500,
                            showCancelButton: false,
                            showConfirmButton: false
                        }); 
                        $('#shippingBtn').click();
                    } else {
                        swal({
                            title: "File not uploaded!",
                            type: "error",  
                            timer: 1500,
                            text: 'Something went wrong!',
                            showCancelButton: false,
                            showConfirmButton: false
                        }); 
                    }
                },
                error: function(error){
					console.log(error)
				}

            });
        }));
        
    </script>
    <script>
        $('#inputGroupFile02').on('change',function(e){
            //get the file name
            var fileName = e.target.files[0].name;
            //replace the "Choose a file" label
            $('.filePathName').html('<span class="text-dark">File Selected : </span>'+fileName).addClass('font-weight-bold text-danger');
        })
    </script>
</body>
</html>