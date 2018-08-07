<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
	<meta charset="utf-8"></meta>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>Isa & Dan</title>


	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/custom.css') }}" />

	
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

		<main class="container-fluid">
			@yield('content')
		</main>

		@include('home.footer')

	</div>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script
	src="https://code.jquery.com/jquery-3.2.1.min.js"
	integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
	crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
	integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
	integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
	crossorigin="anonymous">
</script>
<script src="https://use.fontawesome.com/629a6d6d87.js"></script>
<script src="{{ asset('js/jquery.mask.min.js') }}"></script>
 <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyATahG05BJe3-gGaq9nyrw7M5aCQ-_0zhk&callback=initMap"></script>
<script src="{{ asset('js/maps.js')}}"></script>
<script src="{{ asset('js/custom.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.2/moment.min.js"></script>
@stack('scripts')
</body>
</html>
