<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

  {!! Html::style('assets/css/bootstrap.min.css') !!}
  {!! Html::style('assets/css/flatly-bootstrap.min.css') !!}
  {!! Html::style('assets/css/mycss.css') !!}

	<title>
	Bachilleratos Digitales
	</title>
	
	<style>
		body {
			padding-top: 70px;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
	    <div class="container">
	        <!-- Brand and toggle get grouped for better mobile display -->
	        <div class="navbar-header">
	            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
	                <span class="sr-only">Toggle navigation</span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	            </button>
	            <a class="navbar-brand" href="/">Bachilleratos Digitales</a>
	        </div>

			<div class="collapse navbar-collapse" id="navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="{{ url('/auth/login') }}">Ingresar</a></li>
						<li><a href="{{ url('/auth/register') }}">Register</a></li>
					@else
						<li><a href="#">{{ Auth::user()->name }}</a></li>
						<li><a href="{{ url('/auth/logout') }}">Salir</a></li>
					@endif
				</ul>
			</div>

	    </div><!-- /.container-fluid -->
	</nav>

	<div class="container" id="content">
		@yield('content')
	</div>
	<hr/>

	<div class="container">
	    &copy; {{ date('Y') }}. Created by <a href="http://www.appzcoder.com">AppzCoder</a>
	    <br/>
	</div>

	<!-- Scripts -->
	{!! Html::script('assets/js/jquery.min.js') !!}
	{!! Html::script('assets/js/bootstrap.min.js') !!}


	{!! Html::script('assets/js/ejercicios.js') !!}
	
	@yield('scripts')
</body>
</html>