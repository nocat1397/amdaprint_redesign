<!DOCTYPE html>
<html lang="en">
<head>

    @include('admin.link')

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
            <h1 class="m-0 text-dark">New Category</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active">Add Category</li>
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
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-6">
              <div class="card p-3 shadow">
                @if (\Session::has('success'))
		            	<div class="alert alert-success catAdd">
                      <h6>{!! \Session::get('success') !!}</h6>
		            	</div>
		            @endif
                <form method="POST" action="/store-category">
                  @csrf
                    <div class="form-group">
                      {!! Form::label('name', 'Name') !!}
                      {!! Form::text('name', null, ['class'=>'form-control text-capitalize', 'placeholder'=>'Enter Category']) !!}
                    </div>
                    <hr>
                    <div class="form-group text-center">
                        <button class="btn btn-dark" type="submit">Submit</button>
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
<script>
  $(document).ready(function(){
    setTimeout(() => {
      $('.alert-success').slideUp();
    }, 3000);
  })
</script>
</body>
</html>
