@extends('pageUser.master')	
@section('title','Forgot Password')
@section('content')	  


	<!-- Title page -->

	<!-- Content page -->
	<section class="bg0 p-t-104 p-b-116">
		<div class="container">
			<div class="flex-w flex-tr">
				<div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
					<form action="{{asset('/forgotpw/')}}" method="post">
						<fieldset>
							<h4 class="mtext-105 cl2 txt-center p-b-30">
								Send Us Your Email
							</h4>
							<div class="alert alert-danger error errorLogin" style="display: none;">
	                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	                            <p style="color:red; display:none;" class="error errorLogin"></p>
	                        </div>

							<div class="bor8 m-b-20 how-pos4-parent">
								<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="email" id="email" placeholder="abc@example.com" required  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
								<img class="how-pos4 pointer-none" src="images/icons/icon-email.png" alt="ICON">
							</div>						

							<button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer" id="quenmk">
								Submit
							</button>
							
						</fieldset>
							
						{{csrf_field()}}    
					</form>
				</div>

				
			</div>
		</div>
	</section>	


@stop
	