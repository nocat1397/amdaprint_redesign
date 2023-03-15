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
        .tags {
          background: #e5f2ff;
          color: #075583;
          padding: 3px 9px 3px 9px;
          border-radius: 20px;
          font-size: 14px;
          text-decoration:none!important;
          font-weight: bold!important;
          transition: 0.2s ease-in-out;
        }
        .tags:hover {
          transition: 0.2s ease-in-out;
          box-shadow: rgb(50 50 93 / 6%) 0px 0px 27px -5px, rgb(0 0 0 / 55%) 0px 8px 16px -8px;
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
            <h1 class="m-0 text-dark">Products</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active">Products</li>
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
                  <table class="table table-stripped" style="width: 100%">
                    @if (count($errors) > 0)
		                	<div class="alert alert-danger imgerror">
		                		<ul>
		                			@foreach ($errors->all() as $error)
		                				<li>{{ $error }}</li>
		                			@endforeach
		                		</ul>
		                	</div>
		                @endif
                    <thead style="background-color: #FCDFBB; color: #a23f25; border: 1px solid #a23f25">
                      <th>Id</th>
                      <th style="width:15%">Category</th>
                      <th>Products</th>
                    </thead>
                    <tbody>
                      @forelse ($categories as $key=>$category)
                      <tr>
                        <td>{{++$loop->index}}</td>
                        <td>{{str_replace('-',' ',$category->name)}}</td>
                        <td>
                          @foreach ($category->product['name'] as $name)
                          <a href="/product/{{$category->id}}/{{$name}}" target="_blank" type="button" class="tags text-capitalize mb-2">{{str_replace('-',' ',$name)}}</a>
                          @endforeach
                        </td>
                      </tr>
                        @empty
                        <tr>
                          <td>No products</td>
                        </tr>
                        @endforelse
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
<script>
    $(document).ready(function(){
      $('form').attr("autocomplete","off");
      $('input').attr("autocomplete","off");
      var i=1;
      $("#add_row").click(function(){b=i-1;
          $('#addr'+i).html($('#addr'+b).html()).find('td:first-child').html(i+1);
          $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
          i++; 
      });
      $("#delete_row").click(function(){
        if(i>1){
      $("#addr"+(i-1)).html('');
      i--;
      }
      calc();
    });
    
    $('#tab_logic tbody').on('keyup change',function(){
      calc();
    });
    $('#tax').on('keyup change',function(){
      calc_total();
    });
    
  
  });
  
  function calc()
  {
    $('#tab_logic tbody tr').each(function(i, element) {
      var html = $(this).html();
      if(html!='')
      {
        var qty = $(this).find('.qty').val();
        var price = $(this).find('.price').val();
        $(this).find('.total').val(qty*price);
        
        calc_total();
      }
      });
  }
  
  function calc_total()
  {
    total=0;
    $('.total').each(function() {
          total += parseInt($(this).val());
      });
    $('#sub_total').val(total.toFixed(2));
    tax_sum=total/100*$('#tax').val();
    $('#tax_amount').val(tax_sum.toFixed(2));
    $('#total_amount').val((tax_sum+total).toFixed(2));
  }
</script>
</body>
</html>
