@extends('pageAdmin.master')	
@section('title','Danh sách đơn hàng')
@section('content')	  
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Danh sách đơn hàng</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-5 col-lg-12">
					<div class="panel panel-primary">
						<div class="panel-heading">
							To Confirm - Chờ xác nhận 
						</div>
											
						<div class="panel-body">
							<div class="bootstrap-table">
								<table class="table table-bordered">
					              	<thead>
						                <tr class="bg-primary">
						                  <th>Mã đơn hàng</th>
						                  <th>Khách hàng</th>					                  
						                  <th>Tổng tiền</th>
						                  <th>Ngày đặt</th>					                 
						                  <th style="width:30%">Tùy chọn</th>
						                </tr>
					              	</thead>
					              	<tbody>
					              		@foreach($bill1 as $bill)
									<tr>
										<td>B000{{$bill->ID}}</td>									
										<td>{{$bill->CustomerID}}</td>
										<td>{{$bill->TotalPrice}}</td>
										<td>{{date("d-m-Y",strtotime($bill->DateOrder))}}</td>
										<td>
				                    		<a href="{{asset('admin/order/detail/'.$bill->ID)}}" class="btn btn-warning">
				                    			<span class="glyphicon glyphicon-edit"></span> Xem chi tiết đơn hàng</a>
				                    		<a href="{{asset('admin/order/changestatus/'.$bill->ID)}}" onclick="return confirm('Bạn có chắc chắn muốn thay đổi?')" class="btn btn-danger">
				                    			<span class=""></span> Đóng gói</a>
				                  		</td>
				                  	</tr>
				                  		@endforeach
					                </tbody>
					            </table>
							</div>
							<div class="clearfix"></div>
						</div>	
						
					</div>										
			</div>
			<div class="col-xs-12 col-md-5 col-lg-12">
					<div class="panel panel-primary">
						<div class="panel-heading">
							To Shop - Chờ đóng gói
						</div>						
						<div class="panel-body">
							<div class="bootstrap-table">
								<table class="table table-bordered">
					              	<thead>
						                <tr class="bg-primary">
						                  <th>Mã đơn hàng</th>
						                  <th>Khách hàng</th>					                  
						                  <th>Tổng tiền</th>
						                  <th>Ngày đặt</th>					                 
						                  <th style="width:30%">Tùy chọn</th>
						                </tr>
					              	</thead>
					              	<tbody>
					              		@foreach($bill2 as $bill)
									<tr>
										<td>B000{{$bill->ID}}</td>									
										<td>{{$bill->CustomerID}}</td>
										<td>{{$bill->TotalPrice}}</td>
										<td>{{date("d-m-Y",strtotime($bill->DateOrder))}}</td>
										<td>
				                    		<a href="{{asset('admin/order/detail/'.$bill->ID)}}" class="btn btn-warning">
				                    			<span class="glyphicon glyphicon-edit"></span> Xem chi tiết đơn hàng</a>
				                    		<a href="{{asset('admin/order/changestatus/'.$bill->ID)}}" onclick="return confirm('Bạn có chắc chắn muốn thay đổi?')" class="btn btn-danger">
				                    			<span class=""></span> Giao hàng</a>
				                  		</td>
				                  	</tr>
				                  		@endforeach
					                </tbody>
					            </table>
							</div>
							<div class="clearfix"></div>

						</div>						
					</div>
					
			</div>
			<div class="col-xs-12 col-md-5 col-lg-12">
					<div class="panel panel-primary">
						<div class="panel-heading">
							To Receive - Đang giao
						</div>
						<div class="panel-body">
							<div class="bootstrap-table">
								<table class="table table-bordered">
					              	<thead>
						                <tr class="bg-primary">
						                  <th>Mã đơn hàng</th>
						                  <th>Khách hàng</th>					                  
						                  <th>Tổng tiền</th>
						                  <th>Ngày đặt</th>					                 
						                  <th style="width:30%">Tùy chọn</th>
						                </tr>
					              	</thead>
					              	<tbody>
					              		@foreach($bill3 as $bill)
									<tr>
										<td>B000{{$bill->ID}}</td>									
										<td>{{$bill->CustomerID}}</td>
										<td>{{$bill->TotalPrice}}</td>
										<td>{{date("d-m-Y",strtotime($bill->DateOrder))}}</td>
										<td>
				                    		<a href="{{asset('admin/order/detail/'.$bill->ID)}}" class="btn btn-warning">
				                    			<span class="glyphicon glyphicon-edit"></span> Xem chi tiết đơn hàng</a>
				                    		<a href="{{asset('admin/order/changestatus/'.$bill->ID)}}" onclick="return confirm('Bạn có chắc chắn muốn thay đổi?')" class="btn btn-danger">
				                    			<span class=""></span> Xong</a>
				                  		</td>
				                  	</tr>
				                  		@endforeach
					                </tbody>
					            </table>
							</div>
							<div class="clearfix"></div>

						</div>	
					</div>
			</div>
			<div class="col-xs-12 col-md-5 col-lg-12">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Completed - Đã giao 
							<a href="{{asset('admin/output/')}}" class="btn btn-danger">
				                <span class=""></span> Xem Hàng Xuất </a>
						</div>
						<div class="panel-body">
							<div class="bootstrap-table">
								<table class="table table-bordered">
					              	<thead>
						                <tr class="bg-primary">
						                  <th>Mã đơn hàng</th>
						                  <th>Khách hàng</th>					                  
						                  <th>Tổng tiền</th>
						                  <th>Ngày đặt</th>					                 
						                  <th style="width:30%">Tùy chọn</th>
						                </tr>
					              	</thead>
					              	<tbody>
					              		@foreach($bill4 as $bill)
									<tr>
										<td>B000{{$bill->ID}}</td>									
										<td>{{$bill->CustomerID}}</td>
										<td>{{$bill->TotalPrice}}</td>
										<td>{{date("d-m-Y",strtotime($bill->DateOrder))}}</td>
										<td>
				                    		<a href="{{asset('admin/order/detail/'.$bill->ID)}}" class="btn btn-warning">
				                    			<span class="glyphicon glyphicon-edit"></span> Xem chi tiết đơn hàng</a>
				                    		
				                  		</td>
				                  	</tr>
				                  		@endforeach
					                </tbody>
					            </table>
							</div>
							<div class="clearfix"></div>

						</div>	
					</div>
			</div>

			
		</div><!--/.row-->
	</div>	<!--/.main-->
@stop
	