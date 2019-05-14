@if (Session::has('error'))
	<p class="alert alert-danger">{{Session::get('error')}}</p>
@endif

@foreach($errors->all() as $error)
	<p class="alert alert-danger">{{$error}}</p>
@endforeach


@if (Session::has('signinok'))
	<p class="alert alert-danger">{{Session::get('signinok')}}</p>
@endif


@if (Session::has('loginfail'))
	<p class="alert alert-danger">{{Session::get('loginfail')}}</p>
@endif