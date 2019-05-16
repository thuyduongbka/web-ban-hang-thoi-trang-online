@extends('pageUser.master')	
@section('title','Orders')
@section('content')	  

	<!-- breadcrumb -->
	<div class="container">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="index.html" class="stext-109 cl8 hov-cl1 trans-04">
				Home
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<span class="stext-109 cl4">
				Shoping Cart
			</span>
		</div>
	</div>
		

	<!-- Shoping Cart -->
	
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
					<div class="m-l-25 m-r--38 m-lr-0-xl">
						<div class="wrap-table-shopping-cart">
							<table class="table-shopping-cart">
								<tr class="table_head">
									<th class="column-1">Product</th>
									<th class="column-2"></th>
									<th class="column-3">Size</th>
									<th class="column-4">Price</th>
									<th class="column-5">Quantity</th>
									<th class="column-6">Total</th>
								</tr>
								<!---->
								@if (!Cart::isEmpty())
								@foreach ($cartCollection as $pr)
								<tr class="table_row">
									<td class="column-1">
										<div class="how-itemcart1">
											<img src="images/product/{{$pr->attributes['image']}}" alt="IMG">
										</div>
									</td>
									<td class="column-2">{{$pr->name}}</td>
									<td class="column-3">{{$pr->attributes['size']}}</td>
									<td class="column-4">{{number_format($pr->price)}}</td>
									<td class="column-5">{{$pr->quantity}}</td>
									<td class="column-6">{{number_format($pr->getPriceSum())}}VND</td>
								</tr>
								@endforeach
								@endif
								<!---->
								
							</table>
						</div>
						<div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">							
							<div class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">								
								<a href="{{asset('deleteall')}}">Delete All</a>	
							</div>
						</div>
						
					</div>
				</div>

				<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
					<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
						<h4 class="mtext-109 cl2 p-b-30">
							Cart Totals
						</h4>

						<div class="flex-w flex-t bor12 p-b-13">
							<div class="size-208">
								<span class="stext-110 cl2">
									Subtotal:
								</span>
							</div>

							<div class="size-209">
								<span class="mtext-110 cl2">
									@if (!Cart::isEmpty()) {{number_format($subTotal)}}VND
									@else 0 @endif 
								</span>
							</div>
						</div>
<!------------------------------------------------------------------------------------------------------------------------>
						<form class="bg0 p-t-75 p-b-85" accept-charset="utf-8" method="post" action="{{asset('/order')}}">
								<div class="flex-w flex-t bor12 p-t-15 p-b-30">
									<div class="size-208 w-full-ssm">
										<span class="stext-110 cl2">
											Shipping:
										</span>
									</div>

									<div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
										<p class="stext-111 cl6 p-t-2">
											There are no shipping methods available. Please double check your address, or contact us if you need any help.
										</p>
										
										<div class="p-t-15">
											<span class="stext-112 cl8">
												Change Your Address
											</span>
											
											<div class="bor8 bg0 m-b-12">
												<input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="address" placeholder="State /  country" value="{{$customer->Address}}">
											</div>
											<span class="stext-112 cl8">
												Note 
											</span>
											
											<div class="bor8 bg0 m-b-12">
												<input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="note" placeholder="Write something ...">
											</div>
											
										</div>
									</div>
								</div>
								
								<button class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
									Proceed to Checkout
								</button>
								{{csrf_field()}}
						</form>
					</div>
				</div>
			</div>
		</div>
		
		
@stop