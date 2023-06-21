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
                        <div class="section_title text-center  wow fadeInUp2" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp2;">
                            {{-- <h4 class="small_title">My Orders</h4> --}}
                            <h2 class="small_title text-dark big_title mb-0" style="text-shadow: 2px 2px 5px #443266;padding: 20px;">
                                My Orders
                            </h2>
                            {{--  <span class="biggest_title">Orders</span>  --}}
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover border border-1 bg-white">
                        <thead>
                            <tr class="bg_default_blue text-light">
                                <th>#</th>
                                <th>OrderID</th>
                                <th>Name</th>
                                <th>Quantity</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($orders as $order)
                                <tr>
                                    <td>{{++$loop->index}}</td>
                                    <td>amdaprints_{{bin2hex('order').$order->id}}</td>
                                    <td>{{str_replace('-',' ',$order->product)}}</td>
                                    <td>{{$order->quantity}}</td>
                                    <td>$ {{$order->amount}}</td>
                                    <td>{{$order->orderstatus->name ?? ''}}</td>
                                    <td>
                                        <button type="button" class="btn btn-outline-primary shadow" data-toggle="modal" data-target="#modal{{$order->id}}">Details</button>
                                        <!--{{$order->id}} Modal -->
                                <div class="modal fade" id="modal{{$order->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-xl">
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
                                                                    <td>@if($order->upload !== null) <a href="/uploads/{{$order->user_id}}/{{$order->upload->file ?? ''}}" download class="btn btn-sm btn-dark shadow"><i class="fa fa-download mr-1"></i>Download</a> @else No @endif</td>
                                                                  </tr>
                                                                <tr>
                                                                    <th>Hire Designer :</th>
                                                                    <td>@if($order->designer !== null) Yes @else No @endif</td>
                                                                  </tr>
                                                                  <tr>
                                                                    <th>Shipping Address :</th>
                                                                    <td>{{$order->shipping->address ?? ''}}</td>
                                                                  </tr>
                                                                  <tr>
                                                                    <th>Order Status :</th>
                                                                    <td><button class="btn btn-success btn-sm" type="button">Order {{$order->orderstatus->name ?? ''}}</button></td>
                                                                  </tr>
                                                                  <tr>
                                                                    <th>Purchase Date :</th>
                                                                    <td>{{$order->created_at->format('d M Y H:i A')}}</td>
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
                                                                @foreach ($order->name as $key=>$name)
                                                                @if($name !== 'img' && $name !== 'route')
                                                                <tr>
                                                                    <td class="text-capitalize font-weight-bold">{{$name}} :</td>
                                                                    <td>@if($name == 'amount') $ @endif {{str_replace('-',' ',$order->data[$key])}}</td>
                                                                </tr>
                                                                @endif
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
                                    <td colspan="4">No Orders Found</td>
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