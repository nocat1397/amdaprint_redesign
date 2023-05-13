<!DOCTYPE html>
<html lang="en">
<head>

    @include('admin.link')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
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
        .btns {
          position: absolute;
          right: 0;
          top: 
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
                          @foreach ($category->product['name'] as $index=>$name)
                          <div class="btn-group">

                            <button type="button" data-toggle="dropdown" aria-expanded="false" class="dropdown-toggle btn tags text-capitalize mb-2">{{str_replace('-',' ',$name)}}</button>
                            <div class="dropdown-menu" style="">
                              {{-- <a class="dropdown-item" type="button" href="/product/{{$category->id}}/{{str_contains($name,'#') ? str_replace('#','hash-',$name) : $name}}" target="_blank"><img src="data:image/png;base64,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" style="height: fit-content;width: 20px;margin-right: 6px;">Edit</a> --}}
                              <a class="dropdown-item" type="button" href="/product/{{$category->id}}/{{$index}}" target="_blank"><img src="data:image/png;base64,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" style="height: fit-content;width: 20px;margin-right: 6px;">Edit</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" type="button" href="javascript:void(0)" data-toggle="modal" data-target="#image{{$key}}{{$index}}"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAACi0lEQVR4nO3U/0sTcRzH8f0calFmmvltc04jixLcyvwhKsgstv6hfllQWhSSVGLfZOlEHSJhRBRBy775Uz8Ytem8brvb5mat7eYtmnvFHUrFduFtt7sb3Bue3E8b9/jc3Vun00YbbbRR5VwIotdGI2CjASWz0vDbaPSIBmz8ECqJFA1QwU3j7zSATXsC4A/hUiQJL0OBZZf5qz2SLJ1XiLt5pHxZXY4mSwPAnXgugIehSgOwxhI5AWssURqAkn8CdoFvwL6FD1kVgE0Ed+IsS/BXxbfQiY8sOl7E0PEyhpMLqaKgbcUAWCmg0/0DLa7wP3W9Z9QPsFIZ/sSNk6GcHX2TUC/ASmVw5Pl3NE+E/ptFYoROCoDVn8Ghp6swjAe3lGUunvUfpxZSsLjjMLvjOP3pp3yA8+Q62mcj0I/RojK/3kBQQPc8wx/AwSeraJ+N4sDjKLrnZdhC54h1tM1E0DhK51WnO47jHxgcfvYtC7B/JoKud0zxAL2+NExTYTQ4qIJqnV4RBLRNr+DYW0Z6wNmlNL9V6kcCkmRyhQUBrS4OkZAOcMbzC3pnEHUPA5JmnAwLAkxTYcEVLBrAPfba+/6iZJwICQJauBU8lygcsPcuiWJmcAYFAc3jIVg2t1e+gJphEsVO7wwKAgxjQZhfxfMHVA99hRw1jdKCAP2jPwjRgD13CMhVgyMgCGhy0PzrJBqw+xYBOavn1qwAoHGEEg+oHFyG3NU9CEgH2HXTByXad4+UBrBzwAelqh0mCwfsuLEEJasZIgsDbL++CKWr5tZsvoCKa4tQQ1W3ifwA5f1ef3m/F2qoapCIiQZsu/K5p6zvi7+szwMlq7jqTVcO+C6KBmijjTba6OSY31QFs+h9sYumAAAAAElFTkSuQmCC" style="height: fit-content;width: 20px;margin-right: 6px;">Upload Image</a>
                              <a class="dropdown-item" type="button" href="javascript:void(0)" data-toggle="modal" data-target="#subcategory{{$key}}{{$index}}"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADoAAAA6CAYAAADhu0ooAAAACXBIWXMAAAsTAAALEwEAmpwYAAACZklEQVR4nO2az0sUYRjHh6CdDh39AzzUoUuHCLr0PgMhBPm+mxBG9svoUME8ZREsVqSBCR26iDv0A6I6eCiiApE6RAgR/aBuHkqqg8W6u5qWHbJW5wkFRcXdmVln8n1n3i98bu8ePnxfeGZnHsNQNGY37TQdl/xiqBot6kjaKKs/eYAJ7GEc7wdhc3PXdWWuriWwCQRSNWzb29avjCjjeC8RosCxN5GiTNglEPjZD1ubOh+rLPo1luMFtKh3EtPo+htUk8rSLr8YqooqFdCiMQvoRmMW+J+NQv2pjSDwKQi7CALHQoHjEAi8ZlnN66QRZdx+Ve2DtReMY6tEojgVlSgIfCCNKEQnSSDsR9KKNh69SJlLzjwXOm9S25Vbvqjbc0Yd0Y6rtyk3nJ9nYuIX+U3D4fPqihaLI1KKru2mLaYz3ecXw0t0hr+lknSigf+mgQ/RsfHxeIt+HCqQ8+bHLHcHpqjnAy3i4ScPUW6/tNJYV46lM5wJHKl0fiG1mefHQxN9MTha8ce1d1yPRqMj8FtA0KJ53agZt6v75VuBege+l+XZ4E/6PTlJrusuK8oEvrXS2FgOEPh+0XmOo5XOL2TD6b6W0MdLzoPhfGF2BO0+dE7N8ZILSPpgqxYNu9GUQ5tS2emsXwxVGw0cWCLK92foCF6uih0NLeqIQqjIJMrtP1GJznzRlkaUcXwSnah9QhpRix+rAYFZ4PgahP0uJPpB4FmjvX2NNKKrGS0at4C+ujEL6E/73knMsoapRV0lGk3GihxE+c5oNZOYNdbtaXtfIkTntrBjv2q+kig1XlYSLeos3+g/FrwvAb3FjBUAAAAASUVORK5CYII=" style="height: fit-content;width: 20px;margin-right: 6px;">Assign Sub Category</a>
                            </div>
                          </div>
                          <!-- Image Modal -->
                          <div class="modal fade" id="image{{$key}}{{$index}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                                <div class="modal-header bg-dark">
                                  <h5 class="modal-title" id="exampleModalLongTitle">Upload Images</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <form action="/uploadProductImg" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="product_index" value="{{$index}}">
                                    <input type="hidden" name="product_id" value="{{$category->product['id']}}">
                                    <label for="">Choose Multiple Images</label>
                                    <div class="form-group">
                                      <input type="file" name="images[]" accept="image/jpeg,image/png,image/jpg" multiple required>
                                    </div>
                                    <hr>
                                    <div class="form-group text-center">
                                      <button type="submit" class="btn btn-primary">Upload</button>
                                    </div>
                                  </form>
                                  <div class="row">
                                    @foreach ($images as $image)
                                    @if($image->product_id == $category->product['id'] && $image->product_index == $index)
                                    <div class="col-md-4 images">
                                      <div class="btns">
                                        <a href="/deleteImg/{{$image->id}}" class="btn btn-sm btn-light shadow"><i class="fa fa-times text-danger"></i></a>
                                      </div>
                                      <div class="form-group">
                                        <a href="/products/{{$image->product_id}}/{{$image->product_index}}/{{$image->name}}" data-fancybox="{{$image->name}}">
                                          <img src="/products/{{$image->product_id}}/{{$image->product_index}}/{{$image->name}}" style="height: fit-content;width: -webkit-fill-available;" alt="Image Gallery">
                                        </a>
                                      </div>
                                    </div>
                                      @endif
                                      @endforeach
                                  </div>
                                </div>
                                
                              </div>
                            </div>
                          </div>
                          
                          <!-- Sub Category Modal -->
                          <div class="modal fade" id="subcategory{{$key}}{{$index}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                                <div class="modal-header bg-dark">
                                  <h5 class="modal-title" id="exampleModalLongTitle">Sub Categories</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <form action="/assign-subcat-product" method="POST">
                                    @csrf
                                    <input type="hidden" name="product_index" value="{{$index}}">
                                    <input type="hidden" name="product_id" value="{{$category->product['id']}}">
                                    <input type="hidden" name="category_id" value="{{$category->id}}">
                                    @forelse ($category->subcategories as $subcat)
                                    <div class="form-group">
                                      <input type="radio" name="subcategory_id" required value="{{$subcat->id}}" @if($subcats !== null && $category->subcategories !== null && sizeof($category->subcategories)) {{$collection = $subcats->where('product_id', $category->product['id'])->where('product_index', $index)->where('category_id', $category->id)->where('subcategory_id', $subcat->id)->value('subcategory_id') == $subcat->id ? 'checked' : ''}} @endif> <span>{{str_replace('-',' ',$subcat->name)}}</span>
                                    </div>
                                    @empty 
                                    <div class="form-group text-center">
                                      <strong>No Subcategories Added!</strong>
                                    </div>
                                    @endforelse
                                    @if(sizeof($category->subcategories))
                                    <hr>
                                    <div class="form-group text-center">
                                      <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                    @endif
                                  </form>
                                  
                                </div>
                                
                              </div>
                            </div>
                          </div>
                          
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

</body>
</html>
