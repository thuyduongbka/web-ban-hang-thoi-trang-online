<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $__env->yieldContent('title'); ?></title>

<base href="<?php echo e(asset('/source/admin-gui')); ?>/"/>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script src="js/lumino.glyphs.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="<?php echo e(asset('admin/home')); ?>">TD Admin</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> <?php echo e(Auth::user()->name); ?> <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="<?php echo e(asset('admin/logout')); ?>"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<ul class="nav menu">
			<li role="presentation" class="divider"></li>
			<li class="active"><a href="<?php echo e(asset('admin/home')); ?>"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Trang chủ</a></li>
			<li><a href="<?php echo e(asset('admin/product')); ?>"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Sản phẩm</a></li>
			<li><a href="<?php echo e(asset('admin/typeproduct')); ?>"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Danh mục</a></li>
			<li><a href="<?php echo e(asset('admin/order')); ?>"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Xem đơn hàng</a></li>
			<li><a href="<?php echo e(asset('admin/input')); ?>"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Nhập kho </a></li>
			<li><a href="<?php echo e(asset('admin/output')); ?>"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Xuất kho </a></li>
			<li role="presentation" class="divider"></li>
			<li><a href="<?php echo e(asset('admin/customer')); ?>"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Khách hàng </a></li>
			<li role="presentation" class="divider"></li>
			<li><a href="<?php echo e(asset('admin/staff')); ?>"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Nhân viên </a></li>
			<li role="presentation" class="divider"></li>
		</ul>
		
	</div><!--/.sidebar-->

	<?php echo $__env->yieldContent('content'); ?>

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
