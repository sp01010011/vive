<div class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ route('home') }}">V!VE</a>
    </div>
    <div class="navbar-collapse collapse navbar-inverse-collapse">
    	@if(Auth::check()) 
		      <ul class="nav navbar-nav">
		        	
					
							<li><a href="{{ route('home') }}"> Timeline </a></li>
							<li><a href="{{ route('friends.index') }}"> Friends</a></li>
			
					
		   			
		      </ul>
		      <form class="navbar-form navbar-left" role="search" method="get" action="{{ route('search.results')}}">
		    
		        <div class="form-group">
		          	<input type="text" name="query" class="form-control" placeholder="Find people"> 
		        </div>
		           
		      </form>
		@endif
      <ul class="nav navbar-nav navbar-right">
		@if(Auth::check()) 
	        <li class="dropdown">
	          <a href=""{{ route('profile.index', Auth::user()->username) }}"  class="dropdown-toggle" data-toggle="dropdown">{{Auth::user()->getNameOrUsername() }}
	            <b class="caret"></b></a>
	          <ul class="dropdown-menu">
	            <li><a href="{{ route('profile.index', Auth::user()->username) }}">My profile</a></li>
	            <li><a href="{{ route('profile.edit') }}">Update Profile</a></li>
	           
	            <li class="divider"></li>
	            <li><a href="{{ route('auth.signout') }}">Logout</a></li>
	          </ul>
	        </li>
	     @else
			<li><a href="{{ route('auth.signup') }}">Sign Up</a></li>
			<li><a href="{{ route('auth.signin') }}">Sign In</a></li>
	     @endif

      </ul>
    </div>
  </div>
</div>
