	
<?php $__env->startSection('title','Danh sách đơn hàng'); ?>
<?php $__env->startSection('content'); ?>	  
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Chi tiết đơn hàng</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-5 col-lg-12">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Đơn hàng B000<?php echo e($bills->ID); ?> - <?php echo e($status->Name); ?>

						</div>
											
						<div class="panel-body">
							<div class="bootstrap-table">
								<table class="table table-bordered">
					              	<thead>
						                <tr class="bg-primary">
						                  <th>Khách hàng</th>
						                  <th>Địa chỉ</th>					                  
						                  <th>SDT</th>	
						                  <th>Giới tính</th>	
						                  <th>Note</th>						                  				                
						                  <th style="width:10%">Tùy chọn</th>
						                </tr>
					              	</thead>
					              	<tbody>
					              		
										<tr>
																			
											<td><?php echo e($customer->customername); ?></td>
											<td><?php echo e($customer->Address); ?></td>
											<td><?php echo e($customer->Phone); ?></td>											
											<td><?php echo e($customer->Gender); ?></td>
											<td><?php echo e($customer->Note); ?></td>
											<td>				                    		
					                    		<a href="<?php echo e(asset('/deletebill/'.$bills->ID)); ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger">
					                    			<span class="glyphicon glyphicon-trash"></span> Xóa đơn hàng</a>
					                  		</td>
					                  	</tr>
				                  		
					                </tbody>
					            </table>
							</div>
							<div class="bootstrap-table">
								<table class="table table-bordered">
					              	<thead>
						                <tr class="bg-primary">
						                  
						                  <th>Mã Hàng</th>	
						                  <th>Tên</th>
						                  <th>Hình ảnh</th>	
						                  <th>Kích thước</th>	
						              	  <th>Số lượng</th>
						              	  <th>Tổng tiền</th>    				                 
						                  
						                </tr>
					              	</thead>
					              	<tbody>
					              		<?php $__currentLoopData = $billdetail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					              		<?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>		
					              		<?php if($pro->ID == $bill->ProductID ): ?>
										<tr>																														
											<td><?php echo e($pro->ID); ?></td>
											<td><?php echo e($pro->Name); ?></td>
											<td>
												<img width="100px" src="<?php echo e(asset('source/images/product/'.$pro->Image1)); ?>" class="thumbnail">
											</td>
											<td><?php echo e($bill->Size); ?></td>
											<td><?php echo e($bill->Quantity); ?></td>
											<td><?php echo e($bill->Price); ?></td>											
					                  	</tr>
				                  		<?php endif; ?>
				                  		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				                  		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					                </tbody>
					            </table>
							</div>
							<div class="clearfix"></div>
						</div>	
						
					</div>										
			</div>			

			
		</div><!--/.row-->
	</div>	<!--/.main-->
<?php $__env->stopSection(); ?>
	
<?php echo $__env->make('pageAdmin.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>