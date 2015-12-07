@extends('templates.default')
@section('content')
	<div class="row">
		<div class="col-lg-5">
			<div class="panel panel-default">
				<div class="panel-heading"> {{Auth::user()->getNameOrUsername() }}'s prifile</div>
				<!--user info -->
				<div class="panel-body">
					@include('user.partials.userblock')
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-lg-offset-3">
			<!--friends, friend requests -->
			<div class="panel panel-default">
				<div class="panel-heading">
					{{ $user->getNameOrUsername() }}'s friends.
				</div>
				<div class="panel-body">
					@if(!$user->friends()->count())
						<p> {{ $user->getNameOrUsername() }} non no friends </p>
					@else
						@foreach($user->friends() as $user)
							@include('user.partials.userblock')
						@endforeach
					@endif
				</div>
			</div>
		</div>
	</div>
@stop 