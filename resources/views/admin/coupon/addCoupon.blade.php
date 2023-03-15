<!DOCTYPE html>
<html lang="en">
<head>

    @include('admin.link')
    <style>
        #data-success, #data-error {
            display: none;
        }
        .subCatCss {
          background-color:#a23f25;
          border-radius:5px;
        }
    </style>

</head>
<body class="hold-transition sidebar-mini over">
<div class="wrapper">

    @include('admin.section.navbar')
    


  @include('admin.section.sidebar')

    {{-- // return Auth::user()->role->name; --}}
    {{-- {{ $role = Auth::user()->role->name }}

    @switch($role)
        @case('Manager')
            @include('admin.template.home.section.sidebar2')
            @break
        @case('Technician')
            @include('admin.template.home.section.sidebar3')
            @break
        @default
            @include('admin.template.home.section.sidebar')
    @endswitch
    @endif --}}
{{-- 
    @if (Auth::check())
    {{$role = Auth::user()->role->name}}
    @switch($role)
        @case('Admin') --}}

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">New Coupon</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Add Coupon</li>
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
        <div class="container mb-5">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="card p-3 shadow">
                @if (session('message'))
                <div class="alert alert-success success-msg">
                    {{ session('message') }}
                </div>
                @endif
                @if (count($errors) > 0)
		        	<div class="alert alert-success imgerror">
		        		<ul>
		        			@foreach ($errors->all() as $error)
		        				<li>{{ $error }}</li>
		        			@endforeach
		        		</ul>
		        	</div>
		        @endif
                <form action="/store-coupon" method="POST">
                    @csrf
                    <label for="">Categories</label>
                    <div class="form-group">
                      <select name="category" class="form-control" required>
                        <option selected>Select Category</option>
                        <option value="Business Cards">Business Cards</option>
                        <option value="Banners">Banners</option>
                        <option value="Office Stationary">Office Stationary</option>
                        <option value="Marketing Essentials">Marketing Essentials</option>
                        <option value="Stands & Displays">Stands & Displays</option>
                        <option value="Sticker & Labels">Sticker / Labels</option>
                      </select>
                    </div>
                    <label for="">Coupon Code</label>
                    <div class="form-group">
                        <input type="text" name="code" class="form-control" placeholder="Enter Coupon Name" required>
                    </div>
                    
                    <label for="">Discount in Percentage</label>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" name="discount" placeholder="Enter discount Percentage" required>
                        <div class="input-group-append">
                            <select class="custom-select text-center" id="inputGroupSelect04" name="type">
                                <option value="%">%</option>
                              </select>
                        </div>
                    </div>
                    <label for="">Expiry Date</label>
                    <div class="form-group">
                        <input type="date" name="expiry" class="form-control" placeholder="dd-mm-yyyy" required>
                    </div>
                    <div class="form-group text-center">
                        <button class="btn btn-primary shadow rounded-0">Submit</button>
                    </div>
                </form>
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
