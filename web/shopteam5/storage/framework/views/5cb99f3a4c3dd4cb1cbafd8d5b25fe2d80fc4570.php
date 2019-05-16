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

						<a href="<?php echo e(asset('faqs')); ?>" class="flex-c-m trans-04 p-lr-25">
							Help & FAQs
						</a>
						<?php if( Auth::guard('customer')->check() ): ?> 
						<a href="<?php echo e(asset('/profile')); ?>" class="flex-c-m trans-04 p-lr-25">
							<?php echo e(Auth::guard('customer')->user()->customername); ?>

						</a>
						<a href="<?php echo e(asset('logout')); ?>" class="flex-c-m trans-04 p-lr-25">
							Log Out
						</a>
						<?php else: ?>						
						<a href="<?php echo e(asset('login')); ?>" class="flex-c-m trans-04 p-lr-25">
							Login 
						</a>

						<a href="<?php echo e(asset('signin')); ?>" class="flex-c-m trans-04 p-lr-25">
							Signin
						</a>
						<?php endif; ?> 
					</div>
				</div>
			</div>

			<div class="wrap-menu-desktop how-shadow1">
				<nav class="limiter-menu-desktop container">
					
					<!-- Logo desktop -->		
					<a href="<?php echo e(asset('/')); ?>" class="logo">
						<img src="images/icons/logo-01.png" alt="IMG-LOGO">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li>
								<a href="<?php echo e(asset('/')); ?>">Home</a>								
							</li>

							<li class="active-menu">
								<a href="<?php echo e(asset('/product')); ?>">Shop</a>
							</li>
						
							<li>
								<a href="<?php echo e(asset('/about')); ?>">About</a>
							</li>

							<li>
								<a href="<?php echo e(asset('/contact')); ?>">Contact</a>
							</li>
						</ul>
					</div>	

					<!-- Icon header -->
					
					<div class="wrap-icon-header flex-w flex-r-m">
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
							<i class="zmdi zmdi-search"></i>
						</div>

						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="<?php if(!Cart::isEmpty()): ?> <?php echo e($totalQty); ?> <?php else: ?> 0 <?php endif; ?>">
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
					<?php if(!Cart::isEmpty()): ?>
					<?php $__currentLoopData = $product_cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="images/product/<?php echo e($pr->attributes['image']); ?>" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="<?php echo e(asset('/product/detail/'.$pr->id)); ?>" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								<?php echo e($pr->name); ?>													
							</a>

							<span class="header-cart-item-info">
								<?php echo e($pr->quantity); ?> x <?php echo e(number_format($pr->price)); ?>


							</span>	

							<span class="header-cart-item-info">
								Size : <?php echo e($pr->attributes['size']); ?> 

							</span>

							<a href="<?php echo e(asset('/delete/'.$pr->id)); ?>" class="header-cart-item-info">
								<img src="images/icons/icon-bin.jpg" alt="IMG">
							</a>				
						</div>
						
					</li>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<?php endif; ?>

					
				</ul>
				
				<div class="w-full">
					<div class="header-cart-total w-full p-tb-40">
						Total: <?php if(!Cart::isEmpty()): ?> <?php echo e(number_format($totalPrice)); ?> <?php else: ?> 0 <?php endif; ?>
					</div>

					<div class="header-cart-buttons flex-w w-full">
						<a href="<?php echo e(asset('order')); ?>" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
							View Cart
						</a>

						<a href="<?php echo e(asset('product')); ?>" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
							Shop
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="images/icons/icon-close2.png" alt="CLOSE">
				</button>

				<form method="get" action="<?php echo e(asset('/search/')); ?>" class="wrap-search-header flex-w p-l-15">
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input class="plh3" type="text" name="searchproduct" id="searchproduct" placeholder="Search...">
					 <?php echo e(csrf_field()); ?> 
				</form>	
				<div id="productList" class=""><br>
				</div>			
			</div>
			
		</div>

	