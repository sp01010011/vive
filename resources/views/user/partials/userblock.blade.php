<div class="media">
	<a class="pull-left" href="{{ route('profile.index', ['username'=>$user->username]) }}">
		<img class="media-object img-circle" alt="{{ $user->getNameOrUsername() }}" src="{{ $user->getAvatarUrl() }}">
	</a>
	<div class="media-body">
		<h4 class="media-heading"><a href="{{ route('profile.index', ['username'=>$user->username]) }}"> {{ $user->getNameOrUsername() }}</a></h4>
		<p> {{$user->location}}</p>
	</div>
</div>