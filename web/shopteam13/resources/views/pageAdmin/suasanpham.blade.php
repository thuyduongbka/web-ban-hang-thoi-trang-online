@extends('pageAdmin.master')	
@section('title','Sửa sản phẩm')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Sản phẩm</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Sửa sản phẩm</div>
					<div class="panel-body">
						@include('errors.note')
						<form method="post" enctype="multipart/form-data" action="{{asset('admin/product/edit/'.$product->ID)}}">
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
									<div class="form-group" >
										<label>Tên sản phẩm </label>
										<input required type="text" name="name" class="form-control" value="{{$product->Name}}">
									</div>
									<div class="form-group" >
										<label>Giá sản phẩm</label>
										<input required type="number" name="price" class="form-control" value="{{$product->Price}}">
									</div>
									<div class="form-group" >
										<label>Số lượng</label>
										<input required type="number" name="quantity" class="form-control" value="{{$product->Quantity}}">
									</div>															
									<div  class="form-group" >
										<p> <label>Miêu tả</label> </p>
										<textarea  required name="description" rows="4" cols="50">{{$product->Description}} </textarea>
									</div>
																
									<input type="submit" name="submit" value="Sửa" class="btn btn-primary">
									<a href="{{asset('admin/product')}}" class="btn btn-danger">Hủy bỏ</a>
								</div>
							</div>
							{{csrf_field()}}
						</form>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@stop		  
	
	