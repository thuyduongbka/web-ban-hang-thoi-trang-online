	
<?php $__env->startSection('title','Danh sách nhân viên'); ?>
<?php $__env->startSection('content'); ?>	  
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Danh sách nhân viên </h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-5 col-lg-5">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Thêm danh mục
						</div>
						<div class="panel-body">
							<?php echo $__env->make('errors.note', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
							<form method="post" action="<?php echo e(asset('admin/staff/add')); ?>">  
								<div class="form-group">
									<label>Tên</label>
	    							<input required type="text" name="name" class="form-control" placeholder="Tên ...">
								</div>
								<div class="form-group">
									<label>Email</label>
	    							<input required type="email" name="email" class="form-control" placeholder="Email ...">
								</div>
								<div class="form-group">
									<label>Password</label>
	    							<input required type="text" name="password" class="form-control" placeholder="...">
								</div>
								<div class="form-group">
									<input type="submit" name="submit" value="Thêm" class="btn btn-primary">							
								</div>
								<?php echo e(csrf_field()); ?>

							</form>							
						</div>
					</div>
			</div>
			<div class="col-xs-12 col-md-7 col-lg-7">
				<div class="panel panel-primary">
					<div class="panel-heading">Danh sách Nhân viên</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<table class="table table-bordered">
				              	<thead>
					                <tr class="bg-primary">
					                  <th>Tên</th>
					                  <th>Email</th>
					                  <th style="width:30%">Tùy chọn</th>
					                </tr>
				              	</thead>
				              	<tbody>
				              		<?php $__currentLoopData = $admin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
									<td><?php echo e($ad->name); ?></td>
									<td><?php echo e($ad->email); ?></td>
									<td>			                    		
			                    		<a href="<?php echo e(asset('admin/staff/delete/'.$ad->id)); ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
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