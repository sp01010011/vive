@extends('templates.default')
@section('content')
	<div class="row">
		<div class="col-lg-6">
			<div class="panel panel-default">
				<div class="panel-heading"> Your friends ({{ $friends->count() }})</div>
				<div class="panel-body">
					@if(!$friends->count())
						<p>  Sorry, but you have no friends! </p>
					@else
						@foreach($friends as $user)
							@include('user.partials.userblock')
						@endforeach
					@endif
				</div>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="panel panel-default">
				<div class="panel-heading"> Friend requests ({{ $requests->count() }})</div>
				<div class="panel-body">
					@if (!$requests->count())
						<p> Sorry you have no friend requests </p>
					@else
						@foreach($requests as $user)
							@include('user.partials.userblock')
						@endforeach
					@endif
				</div>
			</div>
		</div>
	</div>
@stop