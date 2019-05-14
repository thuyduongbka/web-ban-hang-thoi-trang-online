@extends('pageAdmin.master')	
@section('title','Danh sách đơn hàng')
@section('content')	  
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Chi tiết đơn hàng</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-5 col-lg-12">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Đơn hàng B000{{$bills->ID}} - {{$status->Name}}
						</div>
											
						<div class="panel-body">
							<div class="bootstrap-table">
								<table class="table table-bordered">
					              	<thead>
						                <tr class="bg-primary">
						                  <th>Khách hàng</th>
						                  <th>Địa chỉ</th>					                  
						                  <th>SDT</th>	
						                  <th>Giới tính</th>	
						                  <th>Note</th>						                  				                
						                  <th style="width:10%">Tùy chọn</th>
						                </tr>
					              	</thead>
					              	<tbody>
					              		
										<tr>
																			
											<td>{{$customer->customername}}</td>
											<td>{{$customer->Address}}</td>
											<td>{{$customer->Phone}}</td>											
											<td>{{$customer->Gender}}</td>
											<td>{{$customer->Note}}</td>
											<td>				                    		
					                    		<a href="{{asset('/deletebill/'.$bills->ID)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger">
					                    			<span class="glyphicon glyphicon-trash"></span> Xóa đơn hàng</a>
					                  		</td>
					                  	</tr>
				                  		
					                </tbody>
					            </table>
							</div>
							<div class="bootstrap-table">
								<table class="table table-bordered">
					              	<thead>
						                <tr class="bg-primary">
						                  
						                  <th>Mã Hàng</th>	
						                  <th>Tên</th>
						                  <th>Hình ảnh</th>	
						                  <th>Kích thước</th>	
						              	  <th>Số lượng</th>
						              	  <th>Tổng tiền</th>    				                 
						                  
						                </tr>
					              	</thead>
					              	<tbody>
					              		@foreach($billdetail as $bill)
					              		@foreach($product as $pro)		
					              		@if ($pro->ID == $bill->ProductID )
										<tr>																														
											<td>{{$pro->ID}}</td>
											<td>{{$pro->Name}}</td>
											<td>
												<img width="100px" src="{{asset('source/images/product/'.$pro->Image1)}}" class="thumbnail">
											</td>
											<td>{{$bill->Size}}</td>
											<td>{{$bill->Quantity}}</td>
											<td>{{$bill->Price}}</td>											
					                  	</tr>
				                  		@endif
				                  		@endforeach
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
	