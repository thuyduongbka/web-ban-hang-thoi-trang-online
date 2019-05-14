@extends('pageAdmin.master')	
@section('title','Thêm sản phẩm')
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
					<div class="panel-heading">Thêm sản phẩm</div>
					<div class="panel-body">
						@include('errors.note')
						<form method="post" enctype="multipart/form-data" action="{{asset('admin/product/add')}}">
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
									<div class="form-group" >
										<label>Tên sản phẩm</label>
										<input required type="text" name="name" class="form-control">
									</div>
									<div class="form-group" >
										<label>Giá sản phẩm</label>
										<input required type="number" name="price" class="form-control">
									</div>
									
									<div class="form-group" >
										<label>Ảnh 1</label>								
										<input required type="file" name="image1[]" multiple="multiple">
										<label>Ảnh 2</label>								
										<input required type="file" name="image2[]" multiple="multiple">
										<label>Ảnh 3</label>								
										<input required type="file" name="image3[]" multiple="multiple">
					          
									</div>									
									<div  class="form-group" >
										<p> <label>Miêu tả</label> </p>
										<textarea required name="description"></textarea>
									</div>
									<div class="form-group" >
										<label>Danh mục</label>
										<select required name="type" class="form-control">
											@foreach($typepro as $type)
											<option value="{{$type->ID}}">{{$type->TypeName}}</option>
											@endforeach
					                    </select>
									</div>		
									<div class="form-group" >
										<label>Màu sắc</label>
										<select required name="color" class="form-control">
											@foreach($color as $co)
											<option value="{{$co->ID}}">{{$co->ColorName}}</option>
											@endforeach											
					                    </select>
									</div>									
									<input type="submit" name="submit" value="Thêm" class="btn btn-primary">
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


