<!doctype html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<title>Corbett Construction | East Lansing MI</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!--<meta name="description" content="">
		<meta name="keywords" content="Construction, East, Lansing, Corbett">-->
		
		<!-- site css -->
		<link rel="stylesheet" href="{{ asset('css/app.css') }}">
		
		<!-- fonts -->
		<link rel="stylesheet" href="https://use.typekit.net/ckm5vfp.css">
		
		<!-- google icons -->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	</head>
    <body>
		<div class="view {{ strtolower($page_class) }}">
			@yield('modal')
		
			@include('partials.nav')
		
			<div class="main">
				@yield('content')
			</div>
			
			@include('partials.footer')		
		</div>
		
		<!-- jQuery JS -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="{{ asset('js/c3i.js') }}"></script>
		
		<!-- page specific js -->
		@yield('pagejs')		
    </body>
</html>