<!DOCTYPE html>
<html lang="en">
<head>

    @include('admin.link')
    <style>
        #data-success, #data-error {
            display: none;
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
            <h1 class="m-0 text-dark">New Service</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Service</li>
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
            @foreach ($services as $service )
            <div class="col-md-6">
              <div class="card p-3 mt-5 shadow">
  
                
            {!! Form::open(['method'=>'post','action'=>'ImageController@store', 'files'=>true]) !!}
            <div class="form-group">
          
              <h3 class="font-weight-bold">{{ $service->name }}</h3>
              {!! Form::hidden('service_id', $service->id) !!}
              <hr>
              @foreach ($service->subservices as $subservice)
              {!! Form::label('name', $subservice->name) !!}
              {!! Form::radio('subservice_id', $subservice->id) !!}
              <br>
              @endforeach
              <br>
              {!! Form::file('file') !!}
              <hr>
              {!! Form::submit('Submit', ['class'=>'btn btn-outline-info btn-sm shadow float-right', 'style'=>"z-index: 100; color:#fff; border:none; text-decoration:none!important; background:#000"]) !!}
             
            </div>
     
            {!! Form::close() !!}
            
  
          </div>
          </div>
          @endforeach
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
    $(document).ready(function() {
    //   $.ajaxSetup({
    //             headers: {
    //                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //             }
    //         });
      $('#addcourse').on('submit', function(e){
        e.preventDefault();
        $.ajax({
          type: "POST",
          url: "/storecourse",
          data: $('#addcourse').serialize(),
          
          success:function(response) {
            console.log("success") 
            $("#addcourse")[0].reset(); 
            $('#data-success').show().delay(3000).fadeOut();           
          },
          error: function(error){
            console.log(error)
            $('#data-error').show().delay(3000).fadeOut(); 
          }
        });
      });
    });
</script>
</body>
</html>
