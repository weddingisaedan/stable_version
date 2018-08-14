<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
	<meta charset="utf-8"></meta>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>Isa & Dan</title>

	<link rel="stylesheet" href="{{ asset('css/custom.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/mobile.css') }}" />

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css?family=Rufina" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Allura" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel="icon" id="favicon" href="img/heart1.ico" type="image/x-icon"/>

	<!-- Scripts -->
	<script>window.Laravel = {!! json_encode([
		'csrfToken' => csrf_token(),
		]) !!};
	</script>
</head>
<body>
	<div id="app" class="content">

		<!-- Header -->
		@include('home.header')

		<main class="w-100">
			@yield('content')
		</main>

		@include('home.footer')

	</div>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script src="https://use.fontawesome.com/629a6d6d87.js"></script>
<script src="{{ asset('js/jquery.mask.min.js') }}"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDuLfHntLf81xxqZmInxhRSim4U8IEwTQE&callback=initMap"></script>
<script src="{{ asset('js/maps.js')}}"></script>
<script src="{{ asset('js/custom.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.2/moment.min.js"></script>
@stack('scripts')
</body>
</html>
