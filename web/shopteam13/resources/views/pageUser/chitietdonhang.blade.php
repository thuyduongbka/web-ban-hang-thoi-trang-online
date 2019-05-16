@extends('pageUser.master')	
@section('title','Bill Detail')
@section('content')	  
	<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/bg-01.jpg');">
		<h2 class="ltext-105 cl0 txt-center">
			Your Bill
		</h2>
	</section>	


	<!-- Content page -->
	<section class="bg0 p-t-75 p-b-120">
		<div class="container">
			<div class="row p-b-148">
				
				<div class="header-cart-title flex-w flex-sb-m p-b-8">
					<span class="mtext-103 cl2">
						Bill code : B000{{$bill->ID}}
					</span>
					<span class="stext-115 cl2 size-213 p-t-18">	
					Date Order : 					
						{{date("d-m-Y",strtotime($bill->DateOrder))}}						
					</span>
					<span class="stext-115 cl2 size-213 p-t-18">	
						{{$status->Name}}		
					</span>
					
				</div>
			
				<div class="header-cart-content flex-w js-pscroll">
					<ul class="header-cart-wrapitem w-full">
						@foreach($billdetail as $pr)
						@foreach ($product as $pro) @if ($pr->ProductID == $pro->ID) 						
						<li class="header-cart-item flex-w flex-t m-b-12">
							<div class="header-cart-item-img">
								<img src="images/product/{{$pro->Image1}}	" alt="IMG">
							</div>

							<div class="header-cart-item-txt p-t-8">
								<a href="" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
									{{$pro->Name}}												
								</a>

								<span class="header-cart-item-info">
									{{number_format($pro->Price)}}VND

								</span>	

								<span class="header-cart-item-info">
									Quantity : {{$pr ->Quantity}}

								</span>	
								<span class="header-cart-item-info">
								Size : {{$pr->Size}}

							</span>
										
							</div>
							
						</li>
						@endif		
						@endforeach
						@endforeach

						
					</ul>
					
					<div class="w-full">
						<div class="header-cart-total w-full p-tb-40">
							Total: {{number_format($bill->TotalPrice)}}VND
						</div>

						<div class="header-cart-buttons flex-w w-full">
							<a href="{{asset('profile')}}" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
								View Bill
							</a>
							@if ($bill->StatusID == 1)
							<a href="{{asset('/deletebill/'.$bill->ID)}}"class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10"  onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger">
								cancel order
							</a>
							@endif

						</div>
					</div>
				</div>
			</div>
			
			
		</div>
	</section>	
	
		

@stop