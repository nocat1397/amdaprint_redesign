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

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Banner Upload</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active">Add Banner</li>
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
            <div class="col-md-4">
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
                <form action="/store-banner" method="POST" enctype="multipart/form-data">
                  @csrf
                      <div class="form-group text-center">
                        <h3><b>Upload Banner</b></h3>
                      </div>
                      <hr>
                      <div class="form-group">
                        <label>Header Banner <span class="text-danger">(Choose multiple images)</span></label>
                        <input type="file" multiple name="header[]">
                      </div>                      
                      <div class="form-group">
                        <label>Footer Banner</label>
                        <input type="file" name="footer">
                      </div>                      
                      <hr>
                      <div class="form-group text-center">
                        <button class="btn btn-dark shadow" type="submit">Submit</button>
                      </div>    
                    </form>
              </div>
            </div>
            @if(!empty($banners))
            <div class="col-md-8">
              <div class="card shadow">
                <div class="card-header">
                  <h3>Header Banners</h3>
                </div>
                <div class="row">
                  @foreach ($banners->header as $key => $header)
                  <div class="col-md-12">
                    <div class="card">
                      <a class="btn btn-dark btn-sm shadow" data-toggle="modal" data-target="#banner{{$key}}" type="button" style="position: absolute; z-index:1000;top:-10%;right:0%"><i class="fas fa-edit text-light"></i></a>
                      <img style="height:200px;width: -webkit-fill-available;" src="/img/banners/header/{{$header}}" alt="">
                    </div>
                  </div>
                  <!--Header Banner Modal -->
                  <div class="modal fade" id="banner{{$key}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Update Header Banner</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="/update-header" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$banners->id}}">
                            <input type="hidden" name="key" value="{{$key}}">
                            <div class="form-group">
                              <input type="file" name="header">
                            </div>
                            <div class="form-group">
                              <button class="btn btn-primary shadow rounded-0" type="submit">Update</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
              <div class="card shadow">
                <div class="card-header">
                  <h3>Footer Banner</h3>
                </div>
                <div class="row"> 
                  <div class="col-md-12">
                    <div class="card">
                      <a class="btn btn-dark btn-sm shadow" data-toggle="modal" data-target="#footerBanner" type="button" style="position: absolute; z-index:1000;top:-10%;right:0%"><i class="fas fa-edit text-light"></i></a>
                      <img style="height:200px;width: -webkit-fill-available;" src="/img/banners/footer/{{$banners->footer}}" alt="">
                    </div>
                  </div>
                </div>
              </div>
              <!--Footer Banner Modal -->
              <div class="modal fade" id="footerBanner" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Update Footer Banner</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form action="/update-footer" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{$banners->id}}">
                        <input type="hidden" name="key" value="{{$key}}">
                        <div class="form-group">
                          <input type="file" name="footer">
                        </div>
                        <div class="form-group">
                          <button class="btn btn-primary shadow rounded-0" type="submit">Update</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endif
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
    $('#categories').on('change',function(e){
      $.ajaxSetup({
                   headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });
      var cat_id = e.target.value;
      
      $.ajax({
        type: "POST",
        url: "/getsubcategory",
        data: {
          id:cat_id
        },
        
        success:function(response) {
          
          $('#subcategory').empty();
          $.each(response[0],function(index,subcat){
            $('#subcategory').append('<div class="col-md-4"><div class="form-group shadow-sm text-center mb-1 subCatCss">  <input type="checkbox" name="sub_category_id" value="'+subcat.id+'"> <b>'+subcat.name+'</b></div><div class="form-group '+subcat.id+'"></div></div>');
            $.each(response[1],function(index,subsubcat){
              if(subcat.id == subsubcat.sub_category_id){

                $('.'+subcat.id).append('<p class="mb-0"><input type="checkbox" name="sub_sub_category_id[]" value="'+subsubcat.id+'" class="subsubCat'+subsubcat.id+'"> <span>'+subsubcat.name+'</span></p>')
              }
            });
            // $('#subcategory').append('<option value="'+subcat.id+'">'+subcat.name+'</option>');
          });
          // console.log(response); 
        },
        error: function(error){
          console.log(error)
          
        }
      });
    });
    // $('#subcategory').click(function(e){

    //   $.ajaxSetup({
    //                 headers: {
    //                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //                 }
    //               });
    //   var sub_cat_id = e.target.value;

    //   $.ajax({
    //     type: "POST",
    //     url: "/getsubsubcategory",
    //     data: {
    //       id:sub_cat_id
    //     },
        
    //     success:function(response) {
          
    //       $('#subsubcategory').empty();
    //       $.each(response,function(index,subsubcat){
    //         $('#subsubcategory').append('<option value="'+subsubcat.id+'">'+subsubcat.name+'</option>');
    //       });
    //       // console.log(response); 
    //     },
    //     error: function(error){
    //       console.log(error)
          
    //     }
    //   });
    // });

</script>
<script>
  $(document).ready(function() {

  $('.subsubCat6').blur(function() {
    if(this.checked)
      {
        console.log(true);
      }
  });
  });
</script>
</body>
</html>
