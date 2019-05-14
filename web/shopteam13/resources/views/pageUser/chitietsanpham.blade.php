@extends('pageUser.master')	
@section('title','Product Detail')
@section('content')	  

	<!-- breadcrumb -->
	<div class="container">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="{{asset('/')}}" class="stext-109 cl8 hov-cl1 trans-04">
				Home
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<a href="{{asset('/product')}}" class="stext-109 cl8 hov-cl1 trans-04">
				{{$typepro->TypeName}}
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<span class="stext-109 cl4">
				{{$product->Name}}
			</span>
		</div>
	</div>
		

	<!-- Product Detail -->
	<section class="sec-product-detail bg0 p-t-65 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-7 p-b-30">
					<div class="p-l-25 p-r-30 p-lr-0-lg">
						<div class="wrap-slick3 flex-sb flex-w">
							<div class="wrap-slick3-dots"></div>
							<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

							<div class="slick3 gallery-lb">
								<div class="item-slick3" data-thumb="images/product/{{$product->Image1}}">
									<div class="wrap-pic-w pos-relative">
										<img src="images/product/{{$product->Image1}}" alt="IMG-PRODUCT">

										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product/{{$product->Image1}}">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>

								<div class="item-slick3" data-thumb="images/product/{{$product->Image2}}">
									<div class="wrap-pic-w pos-relative">
										<img src="images/product/{{$product->Image2}}" alt="IMG-PRODUCT">

										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product/{{$product->Image2}}">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>

								<div class="item-slick3" data-thumb="images/product/{{$product->Image3}}">
									<div class="wrap-pic-w pos-relative">
										<img src="images/product/{{$product->Image3}}" alt="IMG-PRODUCT">

										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product/{{$product->Image3}}">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
					
				<div class="col-md-6 col-lg-5 p-b-30">
					<div class="p-r-50 p-t-5 p-lr-0-lg">
						<h4 class="mtext-105 cl2 js-name-detail p-b-14">
							{{$product->Name}}
						</h4>

						<span class="mtext-106 cl2">
							{{number_format($product->Price)}}VND
						</span>

						<p class="stext-102 cl3 p-t-23">
							{{$product->Description}}
						</p>

						<p class="stext-102 cl3 p-t-23">
							Color : {{$color->ColorName}}
						</p>

						
						<!--  -->
						<div class="p-t-33">
							<form method="post" action="{{asset('/cart/'.$product->ID)}}" >
								<div class="flex-w flex-r-m p-b-10">
									<div class="size-203 flex-c-m respon6">
										Size
									</div>

									<div class="size-204 respon6-next">
										<div class="rs1-select2 bor8 bg0">
											<select class="js-select2" name="size">												<option>S</option>
												<option>M</option>
												<option>L</option>
												<option>XL</option>
											</select>
											<div class="dropDownSelect2"></div>
										</div>
									</div>
								</div>			

								<div class="flex-w flex-r-m p-b-10">
									<div class="size-203 flex-c-m respon6">
										Quantity 
									</div>

									<div class="size-204 respon6-next">
										@if ( $product->Quantity - $productincart == 0) 
										<span class="mtext-106 cl2">
											Sold Out !
										</span>
										@endif
										<div class="rs1-select2 bor8 bg0">											
											<select class="js-select2" name="quantity">
												@for ($i = 1; $i <= $product->Quantity - $productincart; $i++)
	   												<option>{{$i}}</option>	 
												@endfor											
											</select>
											<div class="dropDownSelect2"></div>
										</div>
									</div>
								</div>		
								<div class="flex-w flex-r-m p-b-10">
									<div class="size-204 flex-w flex-m respon6-next">									
										<button type="submit" class="sumbit flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">Add to cart</button>										
									</div>
								</div>	
								{{csrf_field()}}
							</form>
						</div>

						<!--  -->
						<div class="flex-w flex-m p-l-100 p-t-40 respon7">
							<div class="flex-m bor9 p-r-10 m-r-11">
								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100" data-tooltip="Add to Wishlist">
									<i class="zmdi zmdi-favorite"></i>
								</a>
							</div>

							<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook">
								<i class="fa fa-facebook"></i>
							</a>

							<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">
								<i class="fa fa-twitter"></i>
							</a>

							<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Google Plus">
								<i class="fa fa-google-plus"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
			
		</div>

		<div class="bg6 flex-c-m flex-w size-302 m-t-73 p-tb-15">			

			<span class="stext-107 cl6 p-lr-25">
				Categories: {{$typepro->TypeName}}
			</span>
		</div>
	</section>


	<!-- Related Products -->
	<section class="sec-relate-product bg0 p-t-45 p-b-105">
		<div class="container">
			<div class="p-b-45">
				<h3 class="ltext-106 cl5 txt-center">
					Related Products
				</h3>
			</div>

			<!-- Slide2 -->
			<div class="wrap-slick2">
				<div class="slick2">
					@foreach($relatepro as $pro )
					<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item {{$pro->TypeID}}">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="images/product/{{$pro->Image1}}" alt="IMG-PRODUCT">

							@if (Cart::get($pro->ID) && Cart::get($pro->ID)->quantity == $pro->Quantity)  
							<a  class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 ">
								Sould out 
							</a>
							@else
							<a href="{{asset('/cart/'.$pro->ID)}}" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 ">
								Add to Cart
							</a>
							@endif
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="{{asset('/product/detail/'.$pro->ID)}}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									{{$pro->Name}}
								</a>

								<span class="stext-105 cl3">
									{{number_format($pro->Price)}}VND
								</span>
							</div>

							
						</div>
					</div>
				</div>
					@endforeach
					
				</div>
			</div>
		</div>
	</section>
		

@stop