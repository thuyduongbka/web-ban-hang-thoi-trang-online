@extends('pageUser.master')
@section('title','Edit Profile')
@section('content')
<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/bg-02.jpg');">
		<h2 class="ltext-105 cl0 txt-center" style="font-family: Constantia">
			{{$customer->customername}}
		</h2>
	</section>	

	<section class="bg0 p-t-104 p-b-116">
		<div class="container">							
			<div class="flex-w flex-tr">
					

				<div class="size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md">	
				@include('errors.note')   	
					<form method="post" action="{{asset('/profile/edit/'.$customer->id)}}" accept-charset="utf-8">			
						<h4 class="mtext-105 cl2 txt-center p-b-30">
							Edit Profile
						</h4>

						<div class="flex-w w-full p-b-42">
							<span class="fs-18 cl5 txt-center size-211">
								<img class="" src="images/icons/profile.jpg" alt="ICON">
							</span>						
							<div class="size-212 p-t-2">
								<span class="mtext-110 cl2">
									Name
								</span>								
								<div class="bor8 m-b-20 how-pos4-parent">							
									<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="name" placeholder="Name" value=" {{$customer->customername}}">							
								</div>
							</div>
						</div>


						<div class="flex-w w-full p-b-42">
							<span class="fs-18 cl5 txt-center size-211">
								<span class="lnr lnr-map-marker"></span>
							</span>						
							<div class="size-212 p-t-2">
								<span class="mtext-110 cl2">
									Address
								</span>								
								<div class="bor8 m-b-20 how-pos4-parent">							
									<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="address" placeholder="Address" value=" {{$customer->Address}}">							
								</div>
							</div>
						</div>

						<div class="flex-w w-full p-b-42">
							<span class="fs-18 cl5 txt-center size-211">
								<span class="lnr lnr-phone-handset"></span>
							</span>

							<div class="size-212 p-t-2">
								<span class="mtext-110 cl2">
									Phone Number 
								</span>
								<div class="bor8 m-b-20 how-pos4-parent">							
									<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="phone" placeholder="Phone" value=" {{$customer->Phone}}">							
								</div>
							</div>
						</div>

						<div class="flex-w w-full p-b-42">
							<span class="fs-18 cl5 txt-center size-211">
								<span class="lnr lnr-envelope"></span>
							</span>

							<div class="size-212 p-t-2">
								<span class="mtext-110 cl2">
									Email
								</span>								
								<div class="bor8 m-b-20 how-pos4-parent">							
									<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="email" placeholder="Your Email Address" value=" {{$customer->email}}">							
								</div>
								
							</div>
						</div>
						
						<div class="flex-w w-full p-b-42">
							<span class="fs-18 cl5 txt-center size-211">
								<img class="" src="images/icons/gender.jpg" alt="ICON">
							</span>

							<div class="size-212 p-t-2">
								<span class="mtext-110 cl2">
									Gender
								</span>								
								<div class="bor8 m-b-20 how-pos4-parent">							
									<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="gender" placeholder="Your Email Address" value=" {{$customer->Gender}}">							
								</div>
							</div>
						</div>						

										
						<button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
							Edit 
						</button>
						 {{csrf_field()}}
					</form>	

					<div class="flex-w w-full">
							<a href="{{asset('/profile/delete/'.$customer->id)}}" class="flex-c-m stext-101 cl0 size-116 bg1 bor1 hov-btn3 p-lr-15 trans-04 pointer" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger">
										Delete Profile
							</a>	
					</div>	
				</div>
				
			</div>
		</div>
	</section>	
@stop