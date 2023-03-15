<!DOCTYPE html>
<html lang="en">
<head>

    @include('admin.link')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <style>
        #productPricingForm, #productPropertyForm{
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
            <h1 class="m-0 text-dark">New Product</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active">Add Product</li>
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
            <div class="col-md-12">
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
                <form id="productInfoForm">
                  <div class="alert alert-primary shadow text-center"><h5 class="font-weight-bold">Basic Product Information</h5></div>
                  <div class="form-row mb-2">
                    <div class="col-md-6">  
                      @if (session('showProductData') !== null)
                      <label for="">Category</label>
                      <input type="hidden" value="{{$category->id ?? ''}}" name="category_id">
                      <input type="text" class="form-control" readonly disabled value="{{str_replace('-',' ',$category->name ??'')}}" name="cat_name">
                      @else 
                      <label for="">Select Category</label>
                      <select name="category_id" class="form-control">
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}" {{isset($productData) && $productData !== null ? $productData->catId ?? $productData->category_id == $category->id ? 'selected' : '' : ''}}>{{str_replace('-',' ',$category->name)}}</option>
                        @endforeach
                      </select>
                      @endif
                    </div>
                    <div class="col-md-6">
                      <label for="">Product Name</label>
                      <input type="text" class="form-control text-capitalize" name="productName" placeholder="Enter Product Name" required value="{{str_replace('-',' ',$productData['name'][$productArrayKey] ?? '')}}">
                    </div>
                  </div>
                      <div class="form-group">
                        <label for="">Description</label>
                        <textarea class='form-control text-capitalize' id='textEditor' name="productDesc" placeholder='Enter product description' rows='3'>{{$productData['desc'][$productArrayKey] ?? ''}}</textarea>
                      </div>
                      <div class="form-group">
                        <label for="">Product Specifications</label>
                        <div class="form-row specs">
                          @if($productData !== null)
                          @foreach($productData['specification'][$productArrayKey] as $specs)
                          <div class="col-md-6">
                            <div class="form-group">
                              <input type="text" name="specs[]" placeholder="Product Specification" class="form-control" value="{{$specs}}">
                            </div>
                          </div>
                          @endforeach
                          @else
                          <div class="col-md-6">
                            <div class="form-group">
                              <input type="text" name="specs[]" placeholder="Product Specification" class="form-control" >
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <input type="text" name="specs[]" placeholder="Product Specification" class="form-control" >
                            </div>
                          </div>
                          @endif
                          
                        </div>
                        <div class="btn-inline mt-2 text-center">
                          <button class="btn btn-outline-danger btn-sm" type="button" id="removeSpec"><i class="fa fa-minus"></i> Remove</button>
                          <button class="btn btn-outline-success btn-sm ml-auto" type="button" id="addSpec"><i class="fa fa-plus"></i> Add</button>
                        </div>
                      </div>
                      <div class="alert alert-danger shadow text-center"><h5 class="font-weight-bold">Product Features (necessary)</h5></div>
                      <div class="form-row">

                      <div class="col-md-3 col-lg-3 form-group">
                        <label for="">Product Size :</label>
                        <div class="sizes">
                          @if($productData !== null)
                          @foreach($productData['size'][$productArrayKey] as $size)
                            <div class="form-group">
                              <input type="text" name="size[]" placeholder='Example : 2" x 3.5"... ' class="form-control" value="{{$size}}">
                            </div>
                          @endforeach
                          @else
                          <div class="form-group">
                            <input type="text" name="size[]" placeholder='Example : 2" x 3.5"... ' class="form-control" >
                          </div>
                          @endif
                        </div>
                        <div class="btn-inline mt-2 text-center">
                          <button class="btn btn-outline-danger btn-sm" type="button" id="removeSize"><i class="fa fa-minus"></i> Remove</button>
                          <button class="btn btn-outline-success btn-sm ml-auto" type="button" id="addSize"><i class="fa fa-plus"></i> Add</button>
                        </div>
                      </div>
                      <div class="col-md-3 col-lg-3 form-group paperTypeDiv" style="border-left:0.2px solid grey">
                        <label for="">Paper Type :</label>
                        <div class="paperType">
                          @if($productData !== null && $productData['paper_type'][0] !== null)
                          @foreach($productData['paper_type'][$productArrayKey] as $paperType)
                            <div class="form-group">
                              <input type="text" name="paperType[]" placeholder='Example : 14pt stock matt ' class="form-control" value="{{$paperType}}">
                            </div>
                          @endforeach
                          @else
                          <div class="form-group">
                            <input type="text" name="paperType[]" placeholder='Example : 14pt stock matt ' class="form-control" >
                          </div>
                          @endif
                        </div>
                        <div class="btn-inline mt-2 text-center">
                          <button class="btn btn-outline-danger btn-sm" type="button" id="removePaperType"><i class="fa fa-minus"></i> Remove</button>
                          <button class="btn btn-outline-success btn-sm ml-auto" type="button" id="addPaperType"><i class="fa fa-plus"></i> Add</button>
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-6 form-group" style="border-left:0.2px solid grey">
                        <label for="">Quantity :</label>
                          <div class="form-row qty">
                            @if($productData !== null)
                          @foreach($productData['qty'][$productArrayKey] as $qty)
                            <div class="col-md-3">
                              <div class="form-group">
                                <input type="text" name="qty[]" placeholder="Qty" class="form-control" value="{{$qty}}">
                              </div>
                            </div>
                            @endforeach
                          @else
                            <div class="col-md-3">
                              <div class="form-group">
                                <input type="text" name="qty[]" placeholder="Qty" class="form-control">
                              </div>
                            </div> 
                            @endif
                          </div>
                        <div class="btn-inline mt-2 text-center">
                          <button class="btn btn-outline-danger btn-sm" type="button" id="removeQty"><i class="fa fa-minus"></i> Remove</button>
                          <button class="btn btn-outline-success btn-sm ml-auto" type="button" id="addQty"><i class="fa fa-plus"></i> Add</button>
                        </div>
                      </div>

                    </div>
                    <hr>
                    <div class="form-group text-center">
                      <button type="button" class="btn btn-primary shadow" id="productInfoNext">Next <i class="fa fa-arrow-right"></i></button>
                    </div>
                </form>
                  <form id="productPropertyForm">

                    <div class="alert alert-warning shadow text-center"><h5 class="font-weight-bold">Product Properties (if any)</h5></div>
                    <input type="hidden" name="category_id" value="{{session('productData')['catId'] ?? $category->id ?? ''}}">
                    <div class="col-md-12">
                     <div class="form-row" id="properties">
                      @if(isset($productData['property'][$productArrayKey]))
                      @foreach($productData['property'][$productArrayKey] as $key=>$property)
                       <div class="col-md-3">
                         <div class="card shadow">
                         <div class="card-body">
 
                         <div class="form-group">
                           <label for="">Property Label :</label>
                          
                             <div class="form-group">
                               <input class="form-control" type="text" name="labels[]" value="{{str_replace('-',' ',$property ?? '')}}">
                             </div>
                             
                           
                         </div>
 
                         <div class="form-group propertyData{{$key}}">
                          @if(isset($productData['property_data'][$productArrayKey][$key]))
                          @foreach($productData['property_data'][$productArrayKey][$key] as $pKey=>$data)
                           <div class="rounded border p-2 mb-2">
                             <label for="">Property Data :</label>
                             <div class="form-group">
                               <input class="form-control data{{$key}}" type="text" name="data{{$key}}[]" value="{{$data ?? ''}}">
                             </div>
                             <div class="form-row">
                              <div class="col-md-8">
                                <label for="">Action :</label>
                                <select name="action{{$key}}[]" class="form-control">
                                  <option {{$productData['property_action'][$productArrayKey][$key][$pKey] == 1 ? 'selected' : ''}} value="1">Percentage</option>
                                  <option {{$productData['property_action'][$productArrayKey][$key][$pKey] == 0 ? 'selected' : ''}} value="0">Fix Value</option>
                                </select>
                              </div>
                              <div class="col-md-4">
                                <label for="">Value :</label>
                                <input type="text" class="form-control percentage{{$key}}" value="{{$productData['property_percentage'][$productArrayKey][$key][$pKey] ?? ''}}" name="percentage{{$key}}[]">
                              </div>
                            </div>
                           </div>
                           @endforeach
                           @else 
                           <div class="rounded border p-2 mb-2">
                            <label for="">Property Data :</label>
                            <div class="form-group">
                              <input class="form-control data{{$key}}" type="text" name="data{{$key}}[]" placeholder="Enter Data">
                            </div>
                            <div class="form-row">
                              <div class="col-md-8">
                                <label for="">Action :</label>
                                <select name="action{{$key}}[]" class="form-control">
                                  <option value="1">Percentage</option>
                                  <option value="0">Fix Value</option>
                                </select>
                              </div>
                              <div class="col-md-4">
                                <label for="">Value :</label>
                                <input type="text" class="form-control percentage{{$key}}" name="percentage{{$key}}[]">
                              </div>
                              </div>
                          </div>
                           @endif
                         </div>
                         
                       
                         <div class="btn-inline mt-2">
                           <button class="btn btn-outline-danger btn-sm removePData{{$key}}" type="button"><i class="fa fa-minus"></i></button>
                           <button class="btn btn-outline-primary btn-sm float-right addPData{{$key}}" type="button"><i class="fa fa-plus"></i></button>
                        </div>
                        <script>
                          $('.addPData{{$key}}').click(function(){
                            $('.propertyData{{$key}}').append('<div class="rounded border p-2 mb-2"><label for="">Property Data :</label><div class="form-group"><input class="form-control data{{$key}}" type="text" name="data{{$key}}[]" placeholder="Enter Data"></div><div class="form-row"><div class="col-md-8"><label for="">Action :</label><select name="action{{$key}}[]" class="form-control"><option value="1">Percentage</option><option value="0">Fix Value</option></select></div><div class="col-md-4"><label for="">Value :</label><input type="text" class="form-control percentage{{$key}}" name="percentage{{$key}}[]"></div></div></div>')
                          });
                          $('.removePData{{$key}}').click(function(){
                            var count = $(".propertyData{{$key}}").find("*").length;
                            if(count > 7)
                            {
                              $('.propertyData{{$key}}').children().last().remove();
                            }
                          });
                        </script>
                           </div>
                         </div>
                       </div>
                       @endforeach
                       @else 
                       <div class="col-md-3">
                        <div class="card shadow">
                          <div class="card-body">
                            <div class="form-group">
                              <label for="">Property Label :</label>
                              <div class="form-group">
                                <input name="labels[]" class="form-control" placeholder="Name" type="text">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                       @endif
                   </div>
                 </div>
                 <hr>
                 <div class="col-md-12">
                   <div class="btn-inline mt-2">
                     <button class="btn btn-outline-danger btn-sm" type="button" id="removeProperty"><i class="fa fa-minus"></i> Remove</button>
                     <button class="btn btn-outline-primary btn-sm float-right" type="button" id="addProperty"><i class="fa fa-plus"></i> Add</button>
                   </div>
                 </div>
                 <hr>
                 <div class="form-group text-center">
                  <button type="button" class="btn btn-dark shadow" id="productPropertyBack"><i class="fa fa-arrow-left"></i> Back</button>
                  <button type="button" class="btn btn-primary shadow" id="productPropertyNext">Next <i class="fa fa-arrow-right"></i></button>
                </div>
              </form>
                        
                    <form id="productPricingForm">
                    <div class="form-row">
                        <div class="col-md-12 text-center">
                          <div class="alert alert-success shadow text-center"><h5 class="font-weight-bold">Add Product Price</h5></div>
                        </div>
                        <input type="hidden" name="category_id" value="{{session('productData')['catId'] ?? $category->id ?? ''}}">
                        <div class="col-md-12">
                          @if ($productData !== null && isset($productData['pricing'][$productArrayKey]))
                              
                          @foreach ($productData['pricing'][$productArrayKey] as $key=>$pricing)
                              {{-- {{$pricing}} --}}
                          <div class="form-row align-items-center">
                            <div class="col-md-3">
                              <div class="form-group">
                                <label for="">Size :</label>
                                <select name="pricingSize[]" class="form-control">
                                @if($productData !== null && isset($productData['size'][$productArrayKey]))
                                @foreach($productData['size'][$productArrayKey] as $size)
                                <option {{$pricing[0] == $size ? 'selected' : ''}} value="{{$size}}">{{$size}}</option>
                                @endforeach
                                @else 
                                <option value="">No size added</option>
                                @endif
                              </select>
                            </div>
                          </div>
                          @if(isset($productData) && $productData['paper_type'][0] !== null)
                          <div class="col-md-3 paperTypeDiv">
                            
                            <div class="form-group">
                              <label for="">Paper Type :</label>
                              <select name="pricingPaperType[]" class="form-control">
                                @if($productData !== null && isset($productData['paper_type'][$productArrayKey]))
                                @foreach($productData['paper_type'][$productArrayKey] as $paperType)
                                <option {{$pricing[1] == $paperType ? 'selected' : ''}} value="{{$paperType}}">{{$paperType}}</option>
                                @endforeach
                                @else 
                                <option value="">No size added</option>
                                @endif
                              </select>
                            </div>
                          </div>
                          @endif
                          @if(isset($category) && $category !== null && $category->name == 'Business Cards')
                          <div class="col-md-3">
                            <div class="form-group">
                              <label for="">Quantity :</label>
                              <select name="pricingQty[]" class="form-control">
                                @if($productData !== null && isset($productData['qty'][$productArrayKey]))
                                @foreach($productData['qty'][$productArrayKey] as $qty)
                                <option {{$pricing[2] == $qty ? 'selected' : ''}} value="{{$qty}}">{{$qty}}</option>
                                @endforeach
                                @else 
                                <option value="">No size added</option>
                                @endif
                              </select>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <label for="">Amount :</label>
                              <input type="text" class="form-control" placeholder="Enter Amount" name="pricing[]" value="{{$pricing[3]}}">
                            </div>
                          </div>
                          @elseif(isset($category) && $category !== null && $category->name == 'Banners')
                          <div class="col-md-3">
                            <div class="form-group">
                              <label for="">Quantity :</label>
                              <select name="pricingQty[]" class="form-control">
                                @if($productData !== null && isset($productData['qty'][$productArrayKey]))
                                @foreach($productData['qty'][$productArrayKey] as $qty)
                                <option {{$pricing[1] == $qty ? 'selected' : ''}} value="{{$qty}}">{{$qty}}</option>
                                @endforeach
                                @else 
                                <option value="">No size added</option>
                                @endif
                              </select>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <label for="">Amount :</label>
                              <input type="text" class="form-control" placeholder="Enter Amount" name="pricing[]" value="{{$pricing[2]}}">
                            </div>
                          </div>
                          @endif
                        </div>
                        @endforeach
                        @endif
                      </div>
                      <div class="col-md-12" id="qtyPricing">
                          <div class="form-row align-items-center">
                            <div class="col-md-3">
                              <div class="form-group">
                                <label for="">Size :</label>
                                <select name="pricingSize[]" class="form-control">
                                  @if($productData !== null && isset($productData['size'][$productArrayKey]))
                                  @foreach($productData['size'][$productArrayKey] as $size)
                                  <option value="{{$size}}">{{$size}}</option>
                                  @endforeach
                                  @else 
                                  <option value="">No size added</option>
                                  @endif
                                </select>
                              </div>
                            </div>
                            @if(isset($productData) && $productData['paper_type'][0] !== null)
                            <div class="col-md-3 paperTypeDiv">

                              <div class="form-group">
                                <label for="">Paper Type :</label>
                                <select name="pricingPaperType[]" class="form-control">
                                  @if($productData !== null && isset($productData['paper_type'][$productArrayKey]))
                                  @foreach($productData['paper_type'][$productArrayKey] as $paperType)
                                  <option value="{{$paperType}}">{{$paperType}}</option>
                                  @endforeach
                                  @else 
                                  <option value="">No size added</option>
                                  @endif
                                </select>
                              </div>
                            </div>
                            @endif
                            <div class="col-md-3">
                              <div class="form-group">
                                <label for="">Quantity :</label>
                                <select name="pricingQty[]" class="form-control">
                                  @if($productData !== null && isset($productData['qty'][$productArrayKey]))
                                @foreach($productData['qty'][$productArrayKey] as $qty)
                                  <option value="{{$qty}}">{{$qty}}</option>
                                @endforeach
                                @else 
                                  <option value="">No size added</option>
                                  @endif
                                </select>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label for="">Amount :</label>
                                <input type="text" class="form-control" placeholder="Enter Amount" name="pricing[]">
                              </div>
                            </div>
                        </div>
                      </div>
                      <div class="col-md-12" id="pricingClone">

                      </div>
                      <div class="col-md-12">
                        <div class="btn-inline mt-2">
                          <button class="btn btn-outline-danger btn-sm" type="button" id="removeQtypricing"><i class="fa fa-minus"></i> Remove</button>
                          <button class="btn btn-outline-primary btn-sm float-right" type="button" id="addQtypricing"><i class="fa fa-plus"></i> Add</button>
                        </div>
                      </div>

                      </div> 
                      <hr>
                      
                      <div class="form-group text-center">
                        <button class="btn btn-dark shadow" type="button" id="productPricingBack"><i class="fa fa-arrow-left"></i> Back</button>
                        <button class="btn btn-primary shadow" type="button" id="productPricingFinish">Finish <i class="fa fa-check"></i></button>
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
{{-- @include('admin.script') --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
    $('select[name="category_id"]').click(function(){
      var catName = $(this).find(':selected').text();
      if(catName == 'Banners')
      {
        $('.paperTypeDiv').slideUp();
      }
      if(catName == 'Business Cards')
      {
        $('.paperTypeDiv').slideDown();
      }
    });
    $('#addSpec').click(function(){
        $('.specs').append('<div class="col-md-6"><div class="form-group"><input type="text" name="specs[]" placeholder="Product Specification" class="form-control"></div></div>');
    });
    $('#removeSpec').click(function() {
        $('.specs').children().last().remove();
    });
    $('#addSize').click(function(){
        $('.sizes').append('<div class="form-group"><input type="text" name="size[]" placeholder="Example : as previous mentioned" class="form-control"></div>');
    });
    $('#removeSize').click(function() {
      var count = $(".sizes").find("*").length;
      if(count > 2)
      {
        $('.sizes').children().last().remove();
      }
    });
    $('#addPaperType').click(function(){
        $('.paperType').append('<div class="form-group"><input type="text" name="paperType[]" placeholder="Example : as previous mentioned" class="form-control"></div>');
    });
    $('#removePaperType').click(function() {
      var count = $(".paperType").find("*").length;
      if(count > 2)
      {
        $('.paperType').children().last().remove();
      }
    });
    $('#addQty').click(function(){
        $('.qty').append('<div class="col-md-3"><div class="form-group"><input type="text" name="qty[]" placeholder="Qty" class="form-control" ></div></div>');
    });
    $('#removeQty').click(function() {
      var count = $(".qty").find("*").length;
      if(count > 3)
      {
        $('.qty').children().last().remove();
      }
    });
    $('#addQtypricing').click(function(){
      var clone = $('#qtyPricing .form-row').clone();
      $('#pricingClone').append(clone);
    });
    $('#removeQtypricing').click(function() {
      var count = $("#pricingClone").find("*").length;
      $('#pricingClone').children().last().remove();
    });


    $('#addProperty').click(function(){
        $('#properties').append('<div class="col-md-3"><div class="card shadow"><div class="card-body"><div class="form-group"><label for="">Property Label :</label><div class="form-group"><input name="labels[]" class="form-control" placeholder="Name" type="text"></div></div></div></div></div>');
    });
    $('#removeProperty').click(function() {
      var count = $("#properties").find("*").length;
      if(count > 7)
      {
        $('#properties').children().last().remove();
      }
    });
</script>
<script>
  $(document).ready(function() {
    var catName = $('select[name="category_id"]').find(':selected').text();
    var catName2 =  $('input[name="cat_name"]').val();
    var finalCatName = catName || catName2;
    // alert(finalCatName);
      if(finalCatName == 'Banners')
      {
        $('.paperTypeDiv').hide();
      }
      if(finalCatName == 'Business Cards')
      {
        $('.paperTypeDiv').slideDown();
      }
    $('#productInfoNext').on('click', function(e){
      $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
      e.preventDefault();
      var catId = $('select[name="category_id"]').val() ?? $('input[name="category_id"]').val();
      var catName = $('select[name="category_id"]').find(':selected').text();
      var catName2 =  $('input[name="cat_name"]').val();
      var finalCatName = catName || catName2;
      var name = $("input[name='productName']").val();
      var desc = $("textarea[name='productDesc']").val();
      var specs = $("input[name='specs[]']")
              .map(function(){return $(this).val();}).get();
      var size = $("input[name='size[]']")
              .map(function(){return $(this).val();}).get();
      var qty = $("input[name='qty[]']")
              .map(function(){return $(this).val();}).get();
      var paperType = $("input[name='paperType[]']")
              .map(function(){return $(this).val();}).get();
      if(finalCatName == 'Business Cards')
      {  
        if(size[0] != "" && paperType[0] != "" && qty[0] != "")
        {
        $.ajax({
          type: "POST",
          url: "/product-info-session",
          data: {catId:catId,name:name,desc:desc,specs:specs,size:size,paperType:paperType,qty:qty},
          
          success:function(response) {
            console.log(response);
            $('#productInfoForm').slideUp();
            $('#productPropertyForm').slideDown();
          },
          error: function(error){
            console.log(error)
          }
        });
      }
    }
      if(finalCatName == 'Banners')
      {  
        if(size[0] != "" && qty[0] != "")
        {
        $.ajax({
          type: "POST",
          url: "/product-info-session",
          data: {catId:catId,name:name,desc:desc,specs:specs,size:size,qty:qty},
          
          success:function(response) {
            console.log(response);
            $('#productInfoForm').slideUp();
            $('#productPropertyForm').slideDown();
          },
          error: function(error){
            console.log(error)
          }
        });
      }
    }
    });
    $('#productPropertyNext').on('click', function(e){
      $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
      e.preventDefault();
      
      var properties = $("input[name='labels[]']")
              .map(function(){return $(this).val();}).get();
      
      if(properties[0] != "")
      {
        $.ajax({
          type: "POST",
          url: "/product-property-session",
          data: $('#productPropertyForm').serialize(),
          
          success:function(response) {
            console.log(response);
            $('#properties').load(location.href + ' #properties .col-md-3');
            $('#qtyPricing').load(location.href + ' #qtyPricing .form-row');
            if(response > 0)
            {
              $('#productPropertyForm').slideUp();
              $('#productPricingForm').slideDown();
            }
          },
          error: function(error){
            console.log(error)
          }
        });
      }
    });
    $('#productPricingFinish').on('click', function(e){
      $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
      e.preventDefault();
      
        $.ajax({
          type: "POST",
          url: "/product-pricing-session",
          data: $('#productPricingForm').serialize(),
          
          success:function(response) {
            console.log(response);
            if(response > 0)
            {
              location.reload();
            }
          },
          error: function(error){
            console.log(error)
          }
        });
    });
    $('#productPricingBack').on('click', function(e){
      $('#productPricingForm').slideUp();
      $('#productPropertyForm').slideDown();
    });
    $('#productPropertyBack').on('click', function(e){
      $('#productPropertyForm').slideUp();
      $('#productInfoForm').slideDown();
    });
  });
</script>

</body>
</html>
