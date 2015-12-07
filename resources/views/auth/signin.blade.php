@extends('templates.default')
@section('content')
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<h3> Sign in </h3>
			<form class="form-verticle" role="form" method="post" action="{{ route('auth.signin')}}">

			{!! csrf_field() !!}
				<div class="form-group{{ $errors->has('email') ? ' has-error' : ''}}">
					<input type="text" name="email" id="email" placeholder="Email address" class="form-control" value="{{old('email')}}">
					@if($errors->has('email'))
						<span class="help-block">{{$errors->first('email')}}</span>
					@endif
				</div>

				<div class="form-group{{ $errors->has('password') ? ' has-error' : ''}}">
					<input type="password" name="password" placeholder="Password" class="form-control" id="password">
					@if($errors->has('password'))
						<span class="help-block">{{$errors->first('password')}}</span>
					@endif
				</div>

				<div class="form-group">
					<label>
						<input type="checkbox" name="remember"> Remember Me
					</label>
				</div>
				
				<button class="btn btn-success btn-raised">Sign in</button>
			</form>
			
		</div>

		
	</div>
@stop