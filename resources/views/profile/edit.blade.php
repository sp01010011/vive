@extends('templates.default')
@section('content')
	<h3>Update your profile</h3>
	<div class="row">
		<div class="col-lg-6">
			<form class="form-vertical" role="form" method="post" action="{{ route('profile.edit')}}">
				<div class="row">
					<div class="col-lg-6">
						<div class="form-group{{ $errors->has('first_name') ? ' has-error' : ''}}">
							<label for="first_name" class="control-label">First name</label>
							<input type="text" class="form-control" id="first_name" name="first_name" value="{{ old('first_name', Auth::user()->first_name) }}">
							@if($errors->has('first_name'))
								<span class="help-block">{{ $errors->first('first_name') }}</span>
							@endif

						</div>
					</div>
					<div class="col-lg-6">
						<div class="form-group{{ $errors->has('last_name') ? ' has-error' : ''}}">
							<label for="last_name" class="control-label">Last name</label>
							<input type="text" class="form-control" id="last_name" name="last_name" value="{{ old('last_name', Auth::user()->last_name) }}">
							@if($errors->has('last_name'))
								<span class="help-block">{{ $errors->first('last_name') }}</span>
							@endif
						</div>
					</div>

				</div>

				<div class="form-group{{ $errors->has('location') ? ' has-error' : ''}}">
					<label for="location">Location</label>
					<input type="text" name="location" id="location" class="form-control" value="{{ old('location', Auth::user()->location) }}">
					@if($errors->has('location'))
								<span class="help-block">{{ $errors->first('location') }}</span>
					@endif
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-success btn-raised">Update</button>
				</div>
				{!! csrf_field() !!}
			</form>
		</div>
	</div>
@stop