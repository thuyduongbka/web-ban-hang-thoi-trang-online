	
<?php $__env->startSection('title','Bill Detail'); ?>
<?php $__env->startSection('content'); ?>	  
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
						Bill code : B000<?php echo e($bill->ID); ?>

					</span>
					<span class="stext-115 cl2 size-213 p-t-18">	
					Date Order : 					
						<?php echo e(date("d-m-Y",strtotime($bill->DateOrder))); ?>						
					</span>
					<span class="stext-115 cl2 size-213 p-t-18">	
						<?php echo e($status->Name); ?>		
					</span>
					
				</div>
			
				<div class="header-cart-content flex-w js-pscroll">
					<ul class="header-cart-wrapitem w-full">
						<?php $__currentLoopData = $billdetail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php if($pr->ProductID == $pro->ID): ?> 						
						<li class="header-cart-item flex-w flex-t m-b-12">
							<div class="header-cart-item-img">
								<img src="images/product/<?php echo e($pro->Image1); ?>	" alt="IMG">
							</div>

							<div class="header-cart-item-txt p-t-8">
								<a href="" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
									<?php echo e($pro->Name); ?>												
								</a>

								<span class="header-cart-item-info">
									<?php echo e(number_format($pro->Price)); ?>VND

								</span>	

								<span class="header-cart-item-info">
									Quantity : <?php echo e($pr ->Quantity); ?>


								</span>	
								<span class="header-cart-item-info">
								Size : <?php echo e($pr->Size); ?>


							</span>
										
							</div>
							
						</li>
						<?php endif; ?>		
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

						
					</ul>
					
					<div class="w-full">
						<div class="header-cart-total w-full p-tb-40">
							Total: <?php echo e(number_format($bill->TotalPrice)); ?>VND
						</div>

						<div class="header-cart-buttons flex-w w-full">
							<a href="<?php echo e(asset('profile')); ?>" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
								View Bill
							</a>
							<?php if($bill->StatusID == 1): ?>
							<a href="<?php echo e(asset('/deletebill/'.$bill->ID)); ?>"class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10"  onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger">
								cancel order
							</a>
							<?php endif; ?>

						</div>
					</div>
				</div>
			</div>
			
			
		</div>
	</section>	
	
		

<?php $__env->stopSection(); ?>
<?php echo $__env->make('pageUser.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>