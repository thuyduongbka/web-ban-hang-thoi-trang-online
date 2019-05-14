@extends('pageAdmin.master')	
@section('title','Danh sách sản phẩm')
@section('content')	  		
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
										@foreach($output as $op)
										<tr>
											<td>{{$op->DateOut}}</td>
											<td>{{$op->BillID}}</td>
											<td>{{$op->TotalPrice}}</td>
											<td>{{$op->Quantity}}</td>
											
											<td>
												<a href="{{asset('admin/order/detail/'.$op->BillID)}}" class="btn btn-warning">
				                    			<span class="glyphicon glyphicon-edit"></span> Xem chi tiết đơn hàng</a>				                    		
												
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
	