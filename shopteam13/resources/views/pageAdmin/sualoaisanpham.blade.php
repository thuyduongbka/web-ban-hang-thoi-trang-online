@extends('pageAdmin.master')	
@section('title','Sửa Danh Mục')
@section('content')
	  
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Danh mục sản phẩm</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-5 col-lg-5">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Sửa danh mục
						</div>
						<div class="panel-body">
							@include('errors.note')
							<form method="post" action="{{asset('/admin/typeproduct/edit/'.$typepro->ID)}}">
								<div class="form-group">
									<label>Tên danh mục:</label>
	    							<input required type="text" name="name" class="form-control" placeholder="Tên danh mục..." value="{{$typepro->TypeName}}">
								</div>
								<div class="form-group">
									<input type="submit" name="submit" value="Sửa" class="btn btn-primary">
									<a href="{{asset('admin/typeproduct')}}" class="btn btn-danger">Hủy bỏ</a>
								</div>
								{{csrf_field()}}
							</form>
						</div>
					</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@stop
	