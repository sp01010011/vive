@extends('templates.default')
@section('content')
<h3> Your search for {{ Request::input('query')}} </h3>
	<div class="row">
		<div class="col-lg-12">
			@if(!$users->count())
				<p> No result is found, sorry </p>
			@else
				@foreach($users as $user)
					@include('user.partials.userblock')
				@endforeach
			@endif
		</div>
	</div>
@stop