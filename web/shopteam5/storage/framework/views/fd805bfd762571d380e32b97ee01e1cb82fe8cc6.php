	
<?php $__env->startSection('title','Danh sách sản phẩm'); ?>
<?php $__env->startSection('content'); ?>	  		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Xuất kho</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Lịch sử xuất kho</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">								
								<table class="table table-bordered" style="margin-top:20px;">				
									<thead>
										<tr class="bg-primary">
											<th>Ngày</th>
											<th>Mã đơn hàng</th>
											<th>Tổng tiền</th>
											<th>Tổng số lượng</th>											
											<th>Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
										<?php $__currentLoopData = $output; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $op): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<tr>
											<td><?php echo e($op->DateOut); ?></td>
											<td><?php echo e($op->BillID); ?></td>
											<td><?php echo e($op->TotalPrice); ?></td>
											<td><?php echo e($op->Quantity); ?></td>
											
											<td>
												<a href="<?php echo e(asset('admin/order/detail/'.$op->BillID)); ?>" class="btn btn-warning">
				                    			<span class="glyphicon glyphicon-edit"></span> Xem chi tiết đơn hàng</a>				                    		
												
											</td>
										</tr>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										
									</tbody>
								</table>							
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
<?php $__env->stopSection(); ?>
	
<?php echo $__env->make('pageAdmin.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>