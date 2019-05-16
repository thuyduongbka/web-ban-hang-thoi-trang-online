@extends('pageAdmin.master')	
@section('title','Danh sách sản phẩm')
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
					<div class="panel-heading">Danh sách sản phẩm</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								<a href="{{asset('admin/product/add')}}" class="btn btn-primary">Thêm sản phẩm</a>
								<table class="table table-bordered" style="margin-top:20px;">				
									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th width="30%">Tên Sản phẩm</th>
											<th>Giá sản phẩm</th>
											<th>Số lượng</th>
											<th width="10%">Ảnh sản phẩm</th>
											<th>Loại sản phẩm</th>
											<th>Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
										@foreach($product as $pro)
										<tr>
											<td>{{$pro->ID}}</td>
											<td>{{$pro->Name}}</td>
											<td>{{number_format($pro->Price)}}</td>
											<td>{{$pro->Quantity}}</td>
											<td>
												<img width="100px" src="{{asset('source/images/product/'.$pro->Image1)}}" class="thumbnail">
											</td>
											<td>{{$pro->TypeName}}</td>
											<td>
												<a href="{{asset('admin/product/edit/'.$pro->ID)}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
												<a href="{{asset('admin/product/delete/'.$pro->ID)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
											</td>
										</tr>
										@endforeach
										
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
@stop
	