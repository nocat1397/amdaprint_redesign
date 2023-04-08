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
            <h1 class="m-0 text-dark">Sub Categories</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item"><a href="/categories">Categories</a></li>
              <li class="breadcrumb-item active">Sub Categories</li>
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
            <div class="col-md-6 p-0">
              <div class="card shadow">
                <div class="card-body">
                  @if (\Session::has('success'))
		            	<div class="alert alert-success catAdd">
                      <h6>{!! \Session::get('success') !!}</h6>
		            	</div>
		            @endif
                <form method="POST" action="/store-subcategory">
                  @csrf
                  <input type="hidden" name="cat_id" value="{{$id}}">
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
            <div class="col-md-6 p-0">
              <div class="card shadow">
                <div class="card-body table-responsive p-0">
                  <table class="table" id="sort" style="width: 100%">
                    @if (\Session::has('danger'))
		                	<div class="alert alert-light catAdd">
                          <h6>{!! \Session::get('danger') !!}</h6>
		                	</div>
		                @endif
                    <thead style="background-color: #FCDFBB; color: #a23f25; border: 1px solid #a23f25">
                      <th class="index">Id</th>
                      <th>Name</th>
                      <th>Action</th>
                    </thead>
                      <tbody>
                      @foreach ($subCat as $data)
                      <tr data-id="{{$data->id}}" data-seq="{{$data->sequence}}" data-category="{{$data->name}}">
                        <td class="index">{{++$loop->index}}</td>
                        <td>{{str_replace('-',' ',$data->name)}}</td>
                        <td>
                          <div class="btn-group">
                            <button class="btn btn-success btn-sm mr-2" data-toggle="modal" data-target="#modal{{$data->id}}"><i class="fas fa-edit"></i></button>
                          </div>
                        </td>
                      </tr>
                      <div class="modal fade" id="modal{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header" style="background-color: #FCDFBB; color: #a23f25; border: 1px solid #a23f25">
                              <h5 class="modal-title font-weight-bold" id="exampleModalLongTitle">Edit Product</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form action="/update-subcategory" method="POST">
                                @csrf
                                <input type="hidden" name="subcat_id" value="{{$data->id}}">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Name</label>
                                  <input type="text" class="form-control" name="name" value="{{str_replace('-',' ',$data->name)}}">
                                </div>
                                <div class="form-group text-center">
                                  <button type="submit" class="btn btn-primary">Submit</button>
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
<script>
  $(document).ready(function(){
    setTimeout(() => {
      $('.alert-success').slideUp();
      $('.alert-light').slideUp();
    }, 3000);
  })
</script>
</body>
</html>
