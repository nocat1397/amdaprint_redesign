<!DOCTYPE html>
<html lang="en">
<head>
    @include('front-end.section.styles')
</head>
<body>
    @include('front-end.section.header')
    <section class="details_section shop_details sec_ptb_130 pt-130 bg_gray clearfix">
        <div class="">
            <div class="container">
                <div class="row justify-content-center mb_50">
                    <div class="col-lg-7 col-md-8 col-sm-9">
                        <div class="section_title text-center wow fadeInUp2" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp2;">
                            {{-- <h4 class="small_title">My Orders</h4> --}}
                            <h2 class="small_title text-dark big_title mb-0" style="text-shadow: 2px 2px 5px #443266;padding: 20px;">
                                My Cart
                            </h2>
                            {{--  <span class="biggest_title">Cart</span>  --}}
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover border border-1 bg-white">
                        <thead>
                            <tr class="bg_default_blue text-light">
                                <th>#</th>
                                <th>Name</th>
                                <th>Quantity</th>
                                <th>Amount</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($carts as $cart)
                                <tr>
                                    <td>{{++$loop->index}}</td>
                                    <td>{{$cart->product}}</td>
                                    <td>{{$cart->quantity}}</td>
                                    <td>$ {{$cart->amount}}</td>
                                    <td class="btn-group">
                                        <a @if(isset($cart->designer)) href="/designer/{{$cart->id}}" @else href="/uploadfile/{{$cart->id}}" @endif class="btn mr-1 btn-outline-success btn-sm rounded-0">Pay</a>
                                        <a href="/cart-remove/{{$cart->id}}" class="btn mr-1 btn-outline-danger btn-sm rounded-0">Remove</a>
                                        <button type="button" class="btn mr-1 btn-outline-primary btn-sm rounded-0 shadow" data-toggle="modal" data-target="#modal{{$cart->id}}">Details</button>
                                        <!--{{$cart->id}} Modal -->
                                <div class="modal fade" id="modal{{$cart->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                      <div class="modal-content">
    
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="card">
                                                        <div class="card-header bg_default_blue">
                                                            <h5 class="text-light">Shipping Details</h5>
                                                        </div>
                                                        <div class="card-body">
                                                            <table class="table table-striped">
                                                                <tr>
                                                                    <th>File Uploaded :</th>
                                                                    <td>@if($cart->upload !== null) <a href="/uploads/{{$cart->user_id}}/{{$cart->upload->file ?? ''}}" download class="btn btn-sm btn-dark shadow"><i class="fa fa-download mr-1"></i>Download</a> @else No @endif</td>
                                                                  </tr>
                                                                <tr>
                                                                    <th>Hire Designer :</th>
                                                                    <td>@if($cart->designer !== null) Yes @else No @endif</td>
                                                                  </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="card">
                                                        <div class="card-header bg_default_blue">
                                                            <h5 class="text-light">Product Details <span class="float-right font-weight-bold" data-dismiss="modal" type="button">X</span></h5>
                                                        </div>
                                                        <div class="card-body">
                                                            <table class="table table-striped">
                                                                @foreach ($cart->name as $key=>$name)
                                                                <tr>
                                                                    @if($name !== 'route')
                                                                    <td class="text-capitalize font-weight-bold">{{$name}} :</td>
                                                                    <td>@if($name == 'amount') $ @endif {{$cart->data[$key]}}</td>
                                                                    @endif
                                                                </tr>
                                                                @endforeach
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">No Items</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    @include('front-end.section.footer')
    @include('front-end.section.scripts')
</body>
</html>