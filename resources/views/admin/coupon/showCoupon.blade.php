<!DOCTYPE html>
<html lang="en">
<head>

    @include('admin.link')
    <style>
        #data-success, #data-error {
            display: none;
        }
        .img-container {
          position: relative;
          width: 20%;
          display: inline-block;

        }
        .image {
          opacity: 1;
          display: block;
          transition: .5s ease;
          backface-visibility: hidden;
          padding: 2px;
        }
        .middle {
          transition: .5s ease;
          opacity: 0;
          position: absolute;
          top: 48%;
          left: 64%;
          transform: translate(-50%, -50%);
          -ms-transform: translate(-50%, -50%);
          text-align: center;
        }
        .img-container:hover .image {
          opacity: 0.3;
        }
        .img-container:hover .middle {
          opacity: 1;
        }
        .text {
          background-color: red;
          color: white;
          font-size: 16px;
          padding: 1px 8px;
        }
        .btn-primary {
          background: #a23f25;
          color: #fff;
          border: 1px solid #0000;
        }
        .btn-primary:hover {
          background: #FCDFBB;
          color: #a23f25;
          border: 1px solid #a23f25;
        }
    </style>

</head>
<body class="hold-transition sidebar-mini over">
<div class="wrapper">

    @include('admin.section.navbar')
    
    @include('admin.section.sidebar')

    

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Coupons</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Coupons</li>
            </ol>
          </div><!-- /.col -->
          <div>
            
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>  
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-md-12 p-0">
              <div class="card shadow">
                <div class="card-body table-responsive p-0">
                  <table class="table" style="width: 100%">
                    @if (count($errors) > 0)
		                	<div class="alert alert-danger imgerror">
		                		<ul>
		                			@foreach ($errors->all() as $error)
		                				<li>{{ $error }}</li>
		                			@endforeach
		                		</ul>
		                	</div>
		                @endif
                    <thead style="background-color: #000; color: #fff; border: 1px solid red">
                      <th>Id</th>
                      <th>Category</th>
                      <th>Coupon Code</th>
                      <th>Discount</th>
                      <th>Expiry</th>
                      <th>Action</th>
                    </thead>
                      <tbody>
                      @foreach ($coupons as $coupon)
                      <tr>
                        <td>{{++$loop->index}}</td>
                        <td>{{$coupon->category}}</td>
                        <td>{{$coupon->code}}</td>
                        <td>{{$coupon->discount}}%</td>
                        <td>{{$coupon->expiry}}</td>
                        <td>
                            <div class="btn-inline">
                              <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-{{$coupon->id}}"><i class="fas fa-edit"></i></button>
                              <a href="{{url('/delete-coupon/'.$coupon->id)}}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                            </div>
                        </td>
                      </tr>
                      <!-- modal -->
                      <div class="modal fade" id="modal-{{$coupon->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header" style="background-color: #000; color: #fff; border: 1px solid red">
                              <h5 class="modal-title font-weight-bold" id="exampleModalLongTitle">Edit Coupon</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true" class="text-light">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form action="/update-coupon" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{$coupon->id}}">
                                <label for="">Categories</label>
                                <div class="form-group">
                                  <select name="category" class="form-control" required>
                                    <option @if($coupon->category == 'Business Cards') selected @endif value="Business Cards">Business Cards</option>
                                    <option @if($coupon->category == 'Banners') selected @endif value="Banners">Banners</option>
                                    <option @if($coupon->category == 'Office Stationary') selected @endif value="Office Stationary">Office Stationary</option>
                                    <option @if($coupon->category == 'Marketing Essentials') selected @endif value="Marketing Essentials">Marketing Essentials</option>
                                    <option @if($coupon->category == 'Stands & Displays') selected @endif value="Stands & Displays">Stands & Displays</option>
                                    <option @if($coupon->category == 'Sticker & Labels') selected @endif value="Sticker & Labels">Sticker / Labels</option>
                                  </select>
                                </div>
                                <label for="">Coupon Code</label>
                                <div class="form-group">
                                    <input type="text" name="code" class="form-control" placeholder="Enter Coupon Name" value="{{$coupon->code ?? ''}}">
                                </div>
                                <label for="">Discount & Discount Type</label>
                                <div class="input-group mb-3">
                                    <input type="number" class="form-control" name="discount" placeholder="Enter discount amount" value="{{$coupon->discount ?? ''}}">
                                    <div class="input-group-append">
                                        <select class="custom-select text-center" id="inputGroupSelect04" name="type">
                                            <option value="%" selected>%</option>
                                          </select>
                                    </div>
                                </div>
                                <label for="">Expiry Date</label>
                                <div class="form-group">
                                    <input type="date" name="expiry" class="form-control" value="{{$coupon->expiry ?? ''}}">
                                </div>
                                <div class="form-group text-center">
                                    <button class="btn btn-primary shadow rounded-0">Submit</button>
                                </div>
                              </form>
                            </div>
                            
                          </div>
                        </div>
                      </div>
                      @endforeach
                  </tbody>
                </table>
                </div>
              </div>
            </div>
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->
  @include('admin.section.footer')
{{-- @endif --}}
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
@include('admin.script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>
