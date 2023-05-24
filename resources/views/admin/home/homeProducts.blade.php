<!DOCTYPE html>
<html lang="en">
<head>

    @include('admin.link')
    <style>
        #data-success, #data-error {
            display: none;
        }
        .checkbox-buttons-container input {
  position: absolute;
  left: -100vw; /* don't hide the input but move it out of view instead for better accessibility   */
}

.checkbox-buttons-container label {
  padding: 4px 16px;
  border: 2px solid #000;
  border-radius: 5px;
  color: #000;
  display: inline-block;
  position: relative;
  transition: 0.3s ease-in-out;
}

.checkbox-buttons-container label:not(:last-child) {
  margin-right: 16px;
}

.checkbox-buttons-container label:hover {
  cursor: pointer;
  /* opacity: 0.7; */
  transition: 0.3s ease-in-out;
}

.checkbox-buttons-container input:checked + label {
  background-color: #000;
  border-color: #000;
  color: #fff;
  box-shadow: none!important;
  transition: 0.3s ease-in-out;
}

/* .checkbox-buttons-container input:checked + label::after {
  width: 16px;
  height: 16px;
  padding: 4px;
  border: 2px solid #e9e9e9;
  border-radius: 50%;
  background: #059f00;
  content: "✔";
  font-size: 12px;
  color: #fff;
  position: absolute;
  top: -16px;
  right: -16px;
} */
.newBlades {
  display: none;
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
            <h1 class="m-0 text-dark">Home Products Assign</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Assign Products</li>
            </ol>
          </div><!-- /.col -->

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>  
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid mb-5">
          <div class="row justify-content-center">
            <div class="col-md-6 col-lg-6">
              <div class="card shadow mt-3 mb-5">
                <div class="card-header">
                  <h5 class="text-center">Home Sections</h5>
                </div>
                <div class="card-body">
                    <form action="/home-products-assign" method="POST">
                        @csrf
                        <div class="form-row">
                          <div class="col-md-6">
                              <label for="">Section</label>
                          </div>
                          <div class="col-md-6">
                              <label for="">Category</label>
                          </div>
                        </div>
                        @foreach ($sections as $section)
                        <div class="form-row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <input type="text" class="form-control" readonly value="{{$section->id}}" name="section_id[]">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <select name="product_id[]" class="form-control" id="">
                                <option value="0">None</option>
                                @foreach ($categories as $category)
                                <option value="{{$category->product->id}}" {{$section->product_id == $category->product->id ? 'selected' : ''}}>{{str_replace('-',' ',$category->name)}}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>
                        </div>
                        @endforeach
                        <div class="form-group text-center mb-0">
                            <button class="btn btn-primary shadow" type="submit">Assign</button>
                        </div>
                    </form>
                  
                </div>
              </div>
            </div>
            {{-- <div class="col-md-6 col-lg-6">
              <div class="card shadow mt-3 mb-5">
                <div class="card-header">
                  <h5 class="text-center">Update Manufacture</h5>
                </div>
                <div class="card-body">
                    <form action="updateManufacture" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="" id="manuId">
                        <label for="">Select Manufacture</label>
                        <div class="input-group">
                          <select class="custom-select select2bs4" name="name">
                            @foreach ($manufactures as $manufacture)
                            <option value="{{$manufacture->id}}" contenteditable="true">{{$manufacture->name}} ({{$manufacture->code}})</option>
                            @endforeach
                          </select>
                          <div class="input-group-append">
                            <a class="btn btn-danger text-white disabled" id="delete" type="button"><i class="fas fa-trash"></i></a>
                          </div>
                        </div>
                        <label for="">Name</label>
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" id="updateName">
                        </div>
                        <label for="">Description</label>
                        <div class="form-group">
                            <input type="text" class="form-control" name="desc" id="updateDesc">
                        </div>
                        <label>Address</label>
                        <div class="form-group">
                            <input type="text" class="form-control" id="updateAddress" name="address">
                        </div>
                        <label>Code</label>
                        <div class="form-group">
                            <input type="text" class="form-control" id="updateCode" name="code">
                        </div>
                        <div class="form-group text-right mb-0">
                            <button class="btn btn-success shadow" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
              </div>
            </div> --}}
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
{{-- @include('admin.script') --}}
<script src="{{asset('/admin/js/pushmenu.js')}}"></script>

</body>
</html>
