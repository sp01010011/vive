<!DOCTYPE html>
<html>
<head>
	<title>Vive - laravel 5.1 Social Network Application </title>

  	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
  	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.2/css/bootstrap-material-design.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.2/css/ripples.min.css">


<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/styles.css') }}">
</head>
<body>
	@include('templates.partials.nav')
	<div class="container">
		@include('templates.partials.alerts')
		@yield('content')
	</div>

<div class="container text-center footer">
	Not Copyrighted! 2015 - <a href="http://sharif.co"> sharif.co </a> - V!VE Laravel 5.1 Social Media App
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script  src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.2/js/ripples.min.js"></script>
<script  src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.2/js/material.min.js"></script>
<script type="text/javascript">
	$(function() {
    $.material.init();
	});
</script>

</body>
</html>