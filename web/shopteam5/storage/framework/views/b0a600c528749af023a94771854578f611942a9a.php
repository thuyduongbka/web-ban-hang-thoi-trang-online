	
<?php $__env->startSection('title','Danh sách đơn hàng'); ?>
<?php $__env->startSection('content'); ?>	  
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Danh sách đơn hàng</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-5 col-lg-12">
					<div class="panel panel-primary">
						<div class="panel-heading">
							To Confirm - Chờ xác nhận 
						</div>
											
						<div class="panel-body">
							<div class="bootstrap-table">
								<table class="table table-bordered">
					              	<thead>
						                <tr class="bg-primary">
						                  <th>Mã đơn hàng</th>
						                  <th>Khách hàng</th>					                  
						                  <th>Tổng tiền</th>
						                  <th>Ngày đặt</th>					                 
						                  <th style="width:30%">Tùy chọn</th>
						                </tr>
					              	</thead>
					              	<tbody>
					              		<?php $__currentLoopData = $bill1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<tr>
										<td>B000<?php echo e($bill->ID); ?></td>									
										<td><?php echo e($bill->CustomerID); ?></td>
										<td><?php echo e($bill->TotalPrice); ?></td>
										<td><?php echo e(date("d-m-Y",strtotime($bill->DateOrder))); ?></td>
										<td>
				                    		<a href="<?php echo e(asset('admin/order/detail/'.$bill->ID)); ?>" class="btn btn-warning">
				                    			<span class="glyphicon glyphicon-edit"></span> Xem chi tiết đơn hàng</a>
				                    		<a href="<?php echo e(asset('admin/order/changestatus/'.$bill->ID)); ?>" onclick="return confirm('Bạn có chắc chắn muốn thay đổi?')" class="btn btn-danger">
				                    			<span class=""></span> Đóng gói</a>
				                  		</td>
				                  	</tr>
				                  		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					                </tbody>
					            </table>
							</div>
							<div class="clearfix"></div>
						</div>	
						
					</div>										
			</div>
			<div class="col-xs-12 col-md-5 col-lg-12">
					<div class="panel panel-primary">
						<div class="panel-heading">
							To Shop - Chờ đóng gói
						</div>						
						<div class="panel-body">
							<div class="bootstrap-table">
								<table class="table table-bordered">
					              	<thead>
						                <tr class="bg-primary">
						                  <th>Mã đơn hàng</th>
						                  <th>Khách hàng</th>					                  
						                  <th>Tổng tiền</th>
						                  <th>Ngày đặt</th>					                 
						                  <th style="width:30%">Tùy chọn</th>
						                </tr>
					              	</thead>
					              	<tbody>
					              		<?php $__currentLoopData = $bill2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<tr>
										<td>B000<?php echo e($bill->ID); ?></td>									
										<td><?php echo e($bill->CustomerID); ?></td>
										<td><?php echo e($bill->TotalPrice); ?></td>
										<td><?php echo e(date("d-m-Y",strtotime($bill->DateOrder))); ?></td>
										<td>
				                    		<a href="<?php echo e(asset('admin/order/detail/'.$bill->ID)); ?>" class="btn btn-warning">
				                    			<span class="glyphicon glyphicon-edit"></span> Xem chi tiết đơn hàng</a>
				                    		<a href="<?php echo e(asset('admin/order/changestatus/'.$bill->ID)); ?>" onclick="return confirm('Bạn có chắc chắn muốn thay đổi?')" class="btn btn-danger">
				                    			<span class=""></span> Giao hàng</a>
				                  		</td>
				                  	</tr>
				                  		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					                </tbody>
					            </table>
							</div>
							<div class="clearfix"></div>

						</div>						
					</div>
					
			</div>
			<div class="col-xs-12 col-md-5 col-lg-12">
					<div class="panel panel-primary">
						<div class="panel-heading">
							To Receive - Đang giao
						</div>
						<div class="panel-body">
							<div class="bootstrap-table">
								<table class="table table-bordered">
					              	<thead>
						                <tr class="bg-primary">
						                  <th>Mã đơn hàng</th>
						                  <th>Khách hàng</th>					                  
						                  <th>Tổng tiền</th>
						                  <th>Ngày đặt</th>					                 
						                  <th style="width:30%">Tùy chọn</th>
						                </tr>
					              	</thead>
					              	<tbody>
					              		<?php $__currentLoopData = $bill3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<tr>
										<td>B000<?php echo e($bill->ID); ?></td>									
										<td><?php echo e($bill->CustomerID); ?></td>
										<td><?php echo e($bill->TotalPrice); ?></td>
										<td><?php echo e(date("d-m-Y",strtotime($bill->DateOrder))); ?></td>
										<td>
				                    		<a href="<?php echo e(asset('admin/order/detail/'.$bill->ID)); ?>" class="btn btn-warning">
				                    			<span class="glyphicon glyphicon-edit"></span> Xem chi tiết đơn hàng</a>
				                    		<a href="<?php echo e(asset('admin/order/changestatus/'.$bill->ID)); ?>" onclick="return confirm('Bạn có chắc chắn muốn thay đổi?')" class="btn btn-danger">
				                    			<span class=""></span> Xong</a>
				                  		</td>
				                  	</tr>
				                  		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					                </tbody>
					            </table>
							</div>
							<div class="clearfix"></div>

						</div>	
					</div>
			</div>
			<div class="col-xs-12 col-md-5 col-lg-12">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Completed - Đã giao 
							<a href="<?php echo e(asset('admin/output/')); ?>" class="btn btn-danger">
				                <span class=""></span> Xem Hàng Xuất </a>
						</div>
						<div class="panel-body">
							<div class="bootstrap-table">
								<table class="table table-bordered">
					              	<thead>
						                <tr class="bg-primary">
						                  <th>Mã đơn hàng</th>
						                  <th>Khách hàng</th>					                  
						                  <th>Tổng tiền</th>
						                  <th>Ngày đặt</th>					                 
						                  <th style="width:30%">Tùy chọn</th>
						                </tr>
					              	</thead>
					              	<tbody>
					              		<?php $__currentLoopData = $bill4; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<tr>
										<td>B000<?php echo e($bill->ID); ?></td>									
										<td><?php echo e($bill->CustomerID); ?></td>
										<td><?php echo e($bill->TotalPrice); ?></td>
										<td><?php echo e(date("d-m-Y",strtotime($bill->DateOrder))); ?></td>
										<td>
				                    		<a href="<?php echo e(asset('admin/order/detail/'.$bill->ID)); ?>" class="btn btn-warning">
				                    			<span class="glyphicon glyphicon-edit"></span> Xem chi tiết đơn hàng</a>
				                    		
				                  		</td>
				                  	</tr>
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