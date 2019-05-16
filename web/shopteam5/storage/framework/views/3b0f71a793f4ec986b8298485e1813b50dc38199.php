	
<?php $__env->startSection('title','Danh sách khách hàng'); ?>
<?php $__env->startSection('content'); ?>	  		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Thông tin Khách hàng </h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Danh sách khách hàng</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">								
								<table class="table table-bordered" style="margin-top:20px;">				
									<thead>
										<tr class="bg-primary">
											<th>Mã khách hàng</th>
											<th>Tên</th>
											<th>Giới tính </th>
											<th>Địa chỉ</th>
											<th>Email</th>
											<th>SĐT</th>											
											<th>Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
										<?php $__currentLoopData = $customer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<tr>
											<td><?php echo e($cus->id); ?></td>
											<td><?php echo e($cus->customername); ?></td>
											<td><?php echo e($cus->Gender); ?></td>
											<td><?php echo e($cus->Address); ?></td>
											<td><?php echo e($cus->email); ?></td>											
											<td><?php echo e($cus->Phone); ?></td>
											<td>												
												<a href="<?php echo e(asset('/profile/delete/'.$cus->id)); ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
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