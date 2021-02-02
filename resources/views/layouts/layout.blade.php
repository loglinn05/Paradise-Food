<!DOCTYPE html>
<html>
	<head>
		<meta charset = 'UTF-8'>
		<meta name = 'viewport' content = 'width=device-width, initial-scale=1, shrink-to-fit=no'>
		<meta http-equiv = 'x-ua-compatible' content = 'ie=edge'>
		<link href = 'https://fonts.googleapis.com/css?family=Noto+Sans&display=swap' rel = 'stylesheet'>
		<link rel = 'stylesheet' href = 'https://use.fontawesome.com/releases/v5.11.2/css/all.css'>
		<link rel = 'stylesheet' href = '{{ asset('resources/MDB/css/bootstrap.min.css') }}'>
		<link rel = 'stylesheet' href = '{{ asset('resources/MDB/css/mdb.min.css') }}'>
		{!! view('css.header') !!}
		{!! view('css.main') !!}
		{!! view('css.footer') !!}
		<title>Paradise Food - @yield('title')</title>
	</head>
	<body>
		{!! view('elements.header') !!}
		@yield('content')
		{!! view('elements.footer') !!}
		<script type = 'text/javascript' src = '{{ asset('resources/MDB/js/jquery.min.js') }}'></script>
		<script type = 'text/javascript' src = '{{ asset('resources/MDB/js/popper.min.js') }}'></script>
		<script type = 'text/javascript' src = '{{ asset('resources/MDB/js/bootstrap.min.js') }}'></script>
		<script type = 'text/javascript' src = '{{ asset('resources/MDB/js/mdb.min.js') }}'></script>
		<script type = 'text/javascript'>
			new WOW().init();
		</script>
		@yield('handling_scripts')
	</body>
</html>