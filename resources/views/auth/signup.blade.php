@extends('templates.default')
@section('content')
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<h3> Sign up for free </h3>
			<form class="form-verticle" role="form" method="post" action="{{ route('auth.signup') }}">
				 <fieldset>
    				<legend>V!VE Account Registration</legend>
					{!! csrf_field() !!}
					<div class="form-group{{ $errors->has('email') ? ' has-error' : ''}}">
						<input type="text" name="email" placeholder="Your email address" class="form-control" id="email" value="{{old('email')}}">

						@if($errors->has('email'))
							<span class="help-block">{{$errors->first('email')}}</span>
						@endif

					</div>

					<div class="form-group{{ $errors->has('username') ? ' has-error' : ''}}">
						<input type="text" name="username"  placeholder="Choose a username" class="form-control" id="username" value="{{old('username')}}">

						@if($errors->has('username'))
							<span class="help-block">{{$errors->first('username')}}</span>
						@endif
					</div>

					<div class="form-group{{ $errors->has('password') ? ' has-error' : ''}}">
						<input type="password" name="password"  placeholder="Choose a password" class="form-control" id="password">

						@if($errors->has('password'))
							<span class="help-block">{{$errors->first('password')}}</span>
						@endif

					</div>
					<div class="form-group">
						<button class="btn btn-success btn-raised" type="submit">Sign up</button>
					</div>
				</fieldset>
			</form>
		</div>
		
	</div>
@stop