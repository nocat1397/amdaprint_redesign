<!DOCTYPE html>
<html lang="en">

<head>
    @include('front-end.section.styles')
</head>
<body>
    
    @include('front-end.section.header')

<!-- main body - start
		================================================== -->
		<main>


			<!-- breadcrumb_section - start
			================================================== -->
			<section class="breadcrumb_section d-flex align-items-center clearfix" data-background="assets/images/breadcrumb/bg_01.jpg">
				<div class="container">
					<div class="row align-items-center justify-content-lg-between">
						<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-delay=".1s">
							<h1 class="page_title mb-0">Shop</h1>
						</div>

						<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 wow fadeInRight" data-wow-delay=".1s">
							<ul class="breadcrumb_nav ul_li_right clearfix">
								<li><a href="/">Home</a></li>
								<li>Shop</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<!-- breadcrumb_section - end
			================================================== -->


			<!-- shop_section - start
			================================================== -->
			<section class="shop_section sec_ptb_130 bg_gray clearfix">
				<div class="container">
					<div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">

						<div class="col-lg-12 col-md-12 order-last">

							<div class="row justify-content-center">
								@foreach($products->name as $key=>$product)
								<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInUp2" data-wow-delay=".1s">
									<div class="product_card text-center">
										<a class="item_image" href="/{{strtolower($products->category->name)}}/{{str_contains($product,'#') ? str_replace('#','hash-',$product) : $product}}">
											@if(sizeof($products->productImages) && $image = $products->productImages->where('product_index',$key)->first())
											<img src="/products/{{$products->id}}/{{$key}}/{{$image->name}}" alt="image_not_found" style="object-fit:cover">
											@else 
											<img src="/noImg.jpg" alt="image_not_found" style="object-fit:cover">
											@endif
										</a>
										<div class="item_content">
											<h3 class="item_title">{{str_replace('-',' ',$product)}}</h3>
										</div>
									</div>
								</div>
								@endforeach
							</div>
						</div>


					</div>
				</div>
			</section>
			<!-- shop_section - end
			================================================== -->


		</main>
		<!-- main body - end
		================================================== -->

@include('front-end.section.footer')
@include('front-end.section.scripts')
</body>

</html>