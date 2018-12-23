@extends('pageAdmin.master')	
@section('title','Nhập kho')
@section('content')	  
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
							@include('errors.note')
							<form method="post" action="{{asset('admin/input')}}">  
								
								<div class="form-group" >
										<label>Sản Phẩm</label>
										<select required name="id" class="form-control">
											@foreach($product as $pr)
											<option value="{{$pr->ID}}">
												{{$pr->ID}}.{{$pr->Name}}											
											</option>											
											@endforeach

					                    </select>					                    

								</div>	
								<div class="form-group">
									<label>Số lượng</label>
	    							<input required type="number" name="quantity" class="form-control" placeholder="1">
								</div>	
								<div class="form-group">
									<input type="submit" name="submit" value="Thêm" class="btn btn-primary">							
								</div>
								{{csrf_field()}}
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
				              		@foreach($input as $ip)
				              		@foreach($product as $pr)
				              		@if ($pr->ID == $ip->ProductID)
								<tr>
									<td>{{$ip->DateIn}}</td>
									<td>{{$ip->ProductID}}</td>
									<td>{{$pr->Name}}</td>
									<td>
										<img width="50px" src="{{asset('source/images/product/'.$pr->Image1)}}" class="thumbnail">
									</td>
									<td>{{$ip->Quantity}}</td>
									
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
	