<!DOCTYPE html>
<html lang="en">
<head>
    @include('front-end.section.styles')
</head>
<body>
    @include('front-end.section.header')
    <section class="details_section shop_details sec_ptb_130 pt-130 bg_gray clearfix" id="designer">
        <div class="">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-6">
                        <form class="text-left" action="/desc-store" method="POST">
                            @csrf
                            <input type="hidden" name="cart_id" value="{{$cart->id}}">
                            <input type="hidden" name="user_id" value="{{Auth::user()->id ?? ''}}">
                            <input type="hidden" name="id" value="{{$desc->id ?? ''}}">
                            <h5 class="text-dark">Describe the design you desire <span class="text-danger">*</span></h5>
                            <div class="form-group">
                                <textarea class="form-control" cols="30" rows="20" name="desc">{{$desc->description ?? ''}}</textarea>
                            </div>
                            <div class="form-group text-center">
                                <button class="addtocart_btn custom_btn bg_default_orange" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        
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
                                        <td class="text-capitalize">Designer Charges</td>
                                        <td>$ 9.99</td>
                                    </tr>
                                    <tr>
                                        <td><h5>TOTAL</h5></td>
                                        <td><h5>$ {{$cart->amount}}</h5></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="card-footer">
                                <button class="addtocart_btn custom_btn bg_default_orange" type="button" id="shippingBtn">Review Product Summary</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="details_section shop_details sec_ptb_130 pt-130 bg_gray clearfix" id="designerCheckout">
        <div class="">
            <div class="container text-center">
                <div class="row">
                    
                    <div class="col-md-8">
                        <div class="card rounded bg-gray border border-1">
                            <div class="card-body border border-0 p-0">
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
                                            <td class="text-capitalize btn-group" style="vertical-align: middle">
                                            @foreach ($cart->name as $key=>$name)
                                            @if($key == 5)
                                            <div>
                                                <img src="{{$cart->data[5]}}" height="80" width="80">
                                            </div>
                                            @endif
                                            @endforeach
                                            @foreach ($cart->name as $key=>$name)
                                            @if($key == 1)
                                            <div class="mt-2">
                                                <strong class="pl-2">
                                                    {{$cart->data[1]}}
                                                </strong>
                                                <br>
                                                <button type="button" class="btn btn-sm btn-transparent" data-toggle="modal" data-target="#details">Details ></button>
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
                            </div>
                            
                        </div>
                        <div class="btn-inline mt-3">
                            <button class="addtocart_btn custom_btn bg_default_orange float-left" type="button" id="shippingBack"><i class="pr-3 fa fa-arrow-left"></i> Back</button>
                            <button class="addtocart_btn custom_btn bg_default_yellow float-right" type="submit" id="shippingNext">Proceed to Checkout <i class="fa fa-arrow-right pl-2"></i></button>
                        </div>
                    <div class="modal fade" id="details" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                              <div class="card rounded bg-gray border border-0 p-0">
                                <div class="card-header bg_default_blue">
                                    <h5 class="text-white">Product Details</h5>
                                </div>
                                <div class="card-body text-left border border-0 p-0">
                                    <table class="table table-stripped text-center">
                                        <tbody>
                                            @foreach($cart->name as $key=>$name)
                                            @if($name !== 'route' && $name !== 'img')
                                            <tr>
                                                <th class="text-capitalize">{{$name}}</strong>
                                                    <td>@if($name == 'amount') $ @endif{{$cart->data[$key]}}</>
                                                    </tr>
                                                    @endif
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card rounded bg-gray border border-0 shadow">
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
                            <div class="card-header text-left">
                                <strong class="text-dark">
                                    Shipping Method
                                </strong>
                            </div>
                            <hr class="mt-2 mb-2">
                            <div class="text-left font-weight-light">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="shipping" value="19.57" id="shipping1" checked>
                                    <div class="form-row">
                                        <div class="col-md-4">
                                            <label class="form-check-label" for="shipping1">    
                                                <strong class="font-weight-none">Priority</strong>
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                        </div>
                                        <div class="col-md-4 text-right">
                                            <label class="form-check-label" for="route1">    
                                                <strong class="font-weight-bold text-dark">$19.57</strong>
                                            </label>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="shipping" value="17.08" id="shipping2">
                                    <div class="form-row">
                                        <div class="col-md-4">
                                            <label class="form-check-label" for="shipping2">    
                                                <strong class="text-">Express</strong>
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                        </div>
                                        <div class="col-md-4 text-right">
                                            <label class="form-check-label" for="route1">    
                                                <strong class="font-weight-bold text-dark">$17.08</strong>
                                            </label>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="shipping" value="14.82" id="shipping3">
                                    <div class="form-row">
                                        <div class="col-md-4">
                                            <label class="form-check-label" for="shipping3">    
                                                <strong class="text-">Standard Ground</strong>
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                        </div>
                                        <div class="col-md-4 text-right">
                                            <label class="form-check-label" for="route1">    
                                                <strong class="font-weight-bold text-dark">$14.82</strong>
                                            </label>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="shipping" value="7.58" id="shipping4">
                                    <div class="form-row">
                                        <div class="col-md-4">
                                            <label class="form-check-label" for="shipping4">    
                                                <strong class="text-">Super Saver</strong>
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                        </div>
                                        <div class="col-md-4 text-right">
                                            <label class="form-check-label" for="route1">    
                                                <strong class="font-weight-bold text-dark">$7.58</strong>
                                            </label>
                                        </div>
                                    </div>
                                  </div>
                        </div>
                        <div class="row mt-2">
                            <form action="">
                                
                                <div class="col-md-12">
                                    <div class="input-group mb-3">
                                        <input type="text" name="coupon" placeholder="Enter Coupon Code" class="form-control" id="couponCode">
                                        <div class="input-group-append">
                                            <button class="addtocart_btn custom_btn bg_default_orange w-100" type="button" id="couponCheck">Apply</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <hr class="mt-2 mb-2">
                    <div class="row">
                        @foreach ($cart->name as $key=>$name)
                        @if($name == 'category')
                            <input type="hidden" name="category" value="{{$cart->data[$key]}}">
                        @endif

                            @if($name !== 'route')
                            @if($key == 2)
                            <div class="col-md-6 text-dark font-weight-bold text-left text-capitalize">Subtotal:</div>
                            <div class="col-md-6 text-dark text-right">@if($name == 'amount') <strong>$</strong> @endif{{$cart->data[$key]}}</div>
                            @endif
                            @endif
                            
                            @endforeach
                            <div class="col-md-6 text-dark font-weight-bold text-left text-capitalize">Designer Charges:</div>
                            <div class="col-md-6 text-dark text-right"><strong>$</strong> <span class="totalDesigner">9.99</span></div>
                            <div class="col-md-6 text-dark font-weight-bold text-left text-capitalize">Shipping Charge:</div>
                            <div class="col-md-6 text-dark text-right"><strong>$</strong> <span class="totalShipping">19.57</span></div>
                            <div class="col-md-6 text-left discount d-none">
                                <strong class="text-dark">Discount :</strong>
                            </div>
                            <div class="col-md-6 text-right discount d-none" id="couponDiscount">
                            </div>
                        </div>
                    <hr class="mt-2 mb-2">                            
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <h5 class="text-dark">Total :</strong>
                        </div>
                        <div class="col-md-6 text-right">
                            <h5 class="font-weight-bold text-dark">$ <span class="grandTotal">{{$cart->amount}}</span></h5>
                        </div>
                    </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="details_section shop_details sec_ptb_130 pt-130 bg_gray clearfix" id="designerCheckout2">
        <div class="">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card border-0">
                            <div class="card-header bg_default_blue">
                                <h5 class="text-white">Shipping & Billing Address</h5>
                            </div>
                            <div class="card-body text-left">
                                <form action="/charge" method="POST">
                                    @csrf
                                    <input type="hidden" name="route" value="0">
                                    <input type="hidden" name="discountAmount" value="0">
                                    <input type="hidden" name="couponUsed" value="0">
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <label for="">First Name<span class="text-danger">*</span></label>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="fname" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="">Last Name<span class="text-danger">*</span></label>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="lname" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Company Name</label>
                                        <input type="text" class="form-control" name="company">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Address<span class="text-danger">*</span></label>
                                        <textarea name="address" class="form-control" cols="30" rows="3" required></textarea>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <label for="">Zip Code<span class="text-danger">*</span></label>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="zip" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="">City<span class="text-danger">*</span></label>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="city" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <label for="">State/Province<span class="text-danger">*</span></label>
                                            <div class="form-group">
                                                <select class="w-100" required name="state" aria-label="state">
                                                    <option value="Alabama">Alabama</option>
                                                    <option value="Alaska">Alaska</option>
                                                    <option value="American Samoa">American Samoa</option>
                                                    <option value="Arizona">Arizona</option>
                                                    <option value="Arkansas">Arkansas</option>
                                                    <option value="Armed Forces Africa">Armed Forces Africa</option>
                                                    <option value="Armed Forces Americas">Armed Forces Americas</option>
                                                    <option value="Armed Forces Canada">Armed Forces Canada</option>
                                                    <option value="Armed Forces Europe">Armed Forces Europe</option>
                                                    <option value="Armed Forces Middle East">Armed Forces Middle East</option>
                                                    <option value="Armed Forces Pacific">Armed Forces Pacific</option>
                                                    <option value="California">California</option>
                                                    <option value="Colorado">Colorado</option>
                                                    <option value="Connecticut">Connecticut</option>
                                                    <option value="Delaware">Delaware</option>
                                                    <option value="District of Columbia">District of Columbia</option>
                                                    <option value="Federated States Of Micronesia">Federated States Of Micronesia</option>
                                                    <option value="Florida">Florida</option>
                                                    <option value="Georgia">Georgia</option>
                                                    <option value="Guam">Guam</option>
                                                    <option value="Hawaii">Hawaii</option>
                                                    <option value="Idaho">Idaho</option>
                                                    <option value="Illinois">Illinois</option>
                                                    <option value="Indiana">Indiana</option>
                                                    <option value="Iowa">Iowa</option>
                                                    <option value="Kansas">Kansas</option>
                                                    <option value="Kentucky">Kentucky</option>
                                                    <option value="Louisiana">Louisiana</option>
                                                    <option value="Maine">Maine</option>
                                                    <option value="Marshall Islands">Marshall Islands</option>
                                                    <option value="Maryland">Maryland</option>
                                                    <option value="Massachusetts">Massachusetts</option>
                                                    <option value="Michigan">Michigan</option>
                                                    <option value="Minnesota">Minnesota</option>
                                                    <option value="Mississippi">Mississippi</option>
                                                    <option value="Missouri">Missouri</option>
                                                    <option value="Montana">Montana</option>
                                                    <option value="Nebraska">Nebraska</option>
                                                    <option value="Nevada">Nevada</option>
                                                    <option value="New Hampshire">New Hampshire</option>
                                                    <option value="New Jersey">New Jersey</option>
                                                    <option value="New Mexico">New Mexico</option>
                                                    <option value="New York">New York</option>
                                                    <option value="North Carolina">North Carolina</option>
                                                    <option value="North Dakota">North Dakota</option>
                                                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                    <option value="Ohio">Ohio</option>
                                                    <option value="Oklahoma">Oklahoma</option>
                                                    <option value="Oregon">Oregon</option>
                                                    <option value="Palau">Palau</option>
                                                    <option value="Pennsylvania">Pennsylvania</option>
                                                    <option value="Puerto Rico">Puerto Rico</option>
                                                    <option value="Rhode Island">Rhode Island</option>
                                                    <option value="South Carolina">South Carolina</option>
                                                    <option value="South Dakota">South Dakota</option>
                                                    <option value="Tennessee">Tennessee</option>
                                                    <option value="Texas">Texas</option>
                                                    <option value="Utah">Utah</option>
                                                    <option value="Vermont">Vermont</option>
                                                    <option value="Virgin Islands">Virgin Islands</option>
                                                    <option value="Virginia">Virginia</option>
                                                    <option value="Washington">Washington</option>
                                                    <option value="West Virginia">West Virginia</option>
                                                    <option value="Wisconsin">Wisconsin</option>
                                                    <option value="Wyoming">Wyoming</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="">Country<span class="text-danger">*</span></label>
                                            <div class="form-group">
                                                <select class="w-100" required name="country" aria-label="country" disabled>
                                                    <option value="United States" selected>United States</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="">Phone Number<span class="text-danger">*</span></label>
                                        <input type="tel" class="form-control w-50" name="phone" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" name="cart_id" value="{{$cart->id}}">
                                        <input type="hidden" name="amount" value="{{$cart->amount}}">
                                        <button class="addtocart_btn custom_btn bg-dark" type="button" id="shippingBack2"><i class="fa fa-arrow-left pr-2"></i> Back</button>
                                        <button class="addtocart_btn custom_btn bg_default_orange float-right" type="submit">Proceed to Pay <i class="fa fa-arrow-right pl-2"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    
                    </div>
            </div>
        </div>
    </section>
    @include('front-end.section.footer')
    @include('front-end.section.scripts')
    <script>
        $(document).ready(function(){
            var shipping = $('input[name="shipping"]:checked').val();
            $('#designerCheckout').fadeOut();
            $('#designerCheckout2').fadeOut();
            $('#shippingCharges').html(shipping);
            var total = parseFloat(shipping) + parseFloat(<?php echo $cart->amount ?>);
            $('.grandTotal').html(total.toFixed(2));
            $('input[name="amount"]').val(total.toFixed(2));
        });
        $('#shippingBtn').click(function(){
            if(!$('textarea[name="desc"]').html()){
                $('textarea[name="desc"]').addClass('is-invalid');
                window.scrollTo({ top: 50, left: 100, behavior: 'smooth' });
            } else {
                $('textarea[name="desc"]').removeClass('is-invalid');
                $('#designer').fadeOut();
                $('#designerCheckout2').fadeOut();
                $('#designerCheckout').fadeIn();
                window.scrollTo({ top: 50, left: 100, behavior: 'smooth' });
            }
        });
        $('#shippingNext').click(function(){
                $('#designer').fadeOut();
                $('#designerCheckout2').fadeIn();
                $('#designerCheckout').fadeOut();
                window.scrollTo({ top: 50, left: 100, behavior: 'smooth' });
        });
        $('#shippingBack').click(function(){
            $('#designerCheckout').fadeOut();
            $('#designerCheckout2').fadeOut();
            $('#designer').fadeIn();
            window.scrollTo({ top: 50, left: 100, behavior: 'smooth' });
        });
        $('#shippingBack2').click(function(){
            $('#designerCheckout').fadeIn();
            $('#designerCheckout2').fadeOut();
            $('#designer').fadeOut();
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
                    // console.log(response);
				},
				error: function(error){
					console.log(error)
				}
            });
        });
    </script>
</body>
</html>