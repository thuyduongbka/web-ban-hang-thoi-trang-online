	<!-- Header -->
	<header class="header-v4">
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<!-- Topbar -->
			<div class="top-bar">
				<div class="content-topbar flex-sb-m h-full container">
					<div class="left-top-bar">
						Free shipping for standard order over 200.000VND
					</div>

					<div class="right-top-bar flex-w h-full">						

						<a href="{{asset('faqs')}}" class="flex-c-m trans-04 p-lr-25">
							Help & FAQs
						</a>
						@if ( Auth::guard('customer')->check() ) 
						<a href="{{asset('/profile')}}" class="flex-c-m trans-04 p-lr-25">
							{{Auth::guard('customer')->user()->customername}}
						</a>
						<a href="{{asset('logout')}}" class="flex-c-m trans-04 p-lr-25">
							Log Out
						</a>
						@else						
						<a href="{{asset('login')}}" class="flex-c-m trans-04 p-lr-25">
							Login 
						</a>

						<a href="{{asset('signin')}}" class="flex-c-m trans-04 p-lr-25">
							Signin
						</a>
						@endif 
					</div>
				</div>
			</div>

			<div class="wrap-menu-desktop how-shadow1">
				<nav class="limiter-menu-desktop container">
					
					<!-- Logo desktop -->		
					<a href="{{asset('/')}}" class="logo">
						<img src="images/icons/logo-01.png" alt="IMG-LOGO">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li>
								<a href="{{asset('/')}}">Home</a>								
							</li>

							<li class="active-menu">
								<a href="{{asset('/product')}}">Shop</a>
							</li>
						
							<li>
								<a href="{{asset('/about')}}">About</a>
							</li>

							<li>
								<a href="{{asset('/contact')}}">Contact</a>
							</li>
						</ul>
					</div>	

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m">
						
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="@if (!Cart::isEmpty()) {{$totalQty}} @else 0 @endif">
							<i class="zmdi zmdi-shopping-cart"></i>
						</div>
						
					</div>
				</nav>
			</div>	
		</div>		

		
	</header>

	<!-- Cart -->
	<div class="wrap-header-cart js-panel-cart">
		<div class="s-full js-hide-cart"></div>

		<div class="header-cart flex-col-l p-l-65 p-r-25">
			<div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
					Your Cart
				</span>

				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div>
			
			<div class="header-cart-content flex-w js-pscroll">
				<ul class="header-cart-wrapitem w-full">
					@if (!Cart::isEmpty())
					@foreach ($product_cart as $pr)
					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="images/product/{{$pr->attributes['image']}}" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="{{asset('/product/detail/'.$pr->id)}}" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								{{$pr->name}}													
							</a>

							<span class="header-cart-item-info">
								{{$pr->quantity}} x {{number_format($pr->price)}}

							</span>	

							<span class="header-cart-item-info">
								Size : {{$pr->attributes['size']}} 

							</span>

							<a href="{{asset('/delete/'.$pr->id)}}" class="header-cart-item-info">
								<img src="images/icons/icon-bin.jpg" alt="IMG">
							</a>				
						</div>
						
					</li>
					@endforeach
					@endif

					
				</ul>
				
				<div class="w-full">
					<div class="header-cart-total w-full p-tb-40">
						Total: @if (!Cart::isEmpty()) {{number_format($totalPrice)}} @else 0 @endif
					</div>

					<div class="header-cart-buttons flex-w w-full">
						<a href="{{asset('order')}}" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
							View Cart
						</a>

						<a href="{{asset('product')}}" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
							Shop
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	