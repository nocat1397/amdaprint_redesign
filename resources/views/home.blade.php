<!DOCTYPE html>
<html lang="en">
<head>

    @include('admin.link')
    
</head>
<body>
    <div class="wrapper">
        
        @include('admin.section.navbar')
        @include('admin.section.sidebar')
        <div class="content-wrapper" style="min-height: 600px;">
            
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div>
                        
                    </div>
                </div>
            </div>
            
            
            <section class="content">
                <div class="container-fluid">
                    
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            
                            <div class="small-box bg-dark shadow">
                                <div class="inner">
                                    <h3>{{$total}}</h3>
                                    <p>Total Orders</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
                            </div>
                        </div>
                        
                        <div class="col-lg-3 col-6">
                            
                            <div class="small-box bg-primary shadow">
                                <div class="inner">
                                    <h3>{{$new}}</h3>
                                    <p>New Orders</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
                            </div>
                        </div>
                        
                        <div class="col-lg-3 col-6">
                            
                            <div class="small-box bg-warning shadow">
                                <div class="inner">
                                    <h3>{{$accept}}</h3>
                                    <p>Accepted Orders</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
                            </div>
                        </div>
                        
                        <div class="col-lg-3 col-6">
                            
                            <div class="small-box bg-info shadow">
                                <div class="inner">
                                    <h3>{{$dispatch}}</h3>
                                    <p>Dispatched Orders</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            
                            <div class="small-box bg-success shadow">
                                <div class="inner">
                                    <h3>{{$deliver}}</h3>
                                    <p>Delivered Orders</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            
                            <div class="small-box bg-danger shadow">
                                <div class="inner">
                                    <h3>{{$decline}}</h3>
                                    <p>Declined Orders</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </section>
            
        </div>
        {{-- <script src="{{mix('/js/app.js')}}"></script> --}}
        @include('admin.script')
    </div>
    </body>
    </html>
    

