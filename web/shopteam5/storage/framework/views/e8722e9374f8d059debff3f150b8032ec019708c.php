	
<?php $__env->startSection('title','Nhập kho'); ?>
<?php $__env->startSection('content'); ?>	  
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Nhập kho</h1>
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
							<form method="post" action="<?php echo e(asset('admin/input')); ?>">  
								
								<div class="form-group" >
										<label>Sản Phẩm</label>
										<select required name="id" class="form-control">
											<?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<option value="<?php echo e($pr->ID); ?>">
												<?php echo e($pr->ID); ?>.<?php echo e($pr->Name); ?>											
											</option>											
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

					                    </select>					                    

								</div>	
								<div class="form-group">
									<label>Số lượng</label>
	    							<input required type="number" name="quantity" class="form-control" placeholder="1">
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
					<div class="panel-heading">Lịch sử nhập kho </div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<table class="table table-bordered">
				              	<thead>
					                <tr class="bg-primary">
					                  <th>Ngày</th>
					                  <th>Mã Sản Phẩm</th>
					                  <th>Tên sản phẩm</th>
					                  <th></th> 
					                  <th>Số lượng</th>
					                  
					                </tr>
				              	</thead>
				              	<tbody>
				              		<?php $__currentLoopData = $input; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ip): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				              		<?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				              		<?php if($pr->ID == $ip->ProductID): ?>
								<tr>
									<td><?php echo e($ip->DateIn); ?></td>
									<td><?php echo e($ip->ProductID); ?></td>
									<td><?php echo e($pr->Name); ?></td>
									<td>
										<img width="50px" src="<?php echo e(asset('source/images/product/'.$pr->Image1)); ?>" class="thumbnail">
									</td>
									<td><?php echo e($ip->Quantity); ?></td>
									
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