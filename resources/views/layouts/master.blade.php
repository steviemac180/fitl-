<!DOCTYPE html>
<html>
	<head>
		<title>Competency</title>
		<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
		<link rel="stylesheet" href="{{ asset('css/custom.css') }}">
	</head>
	<body>
		@include('shared.header')
	<div class="container">
		@yield('content')
	</div>
		@include('shared.footer')
		<script src="{{ asset('js/jquery-2.2.3.js')}}"></script>
		<script src="{{asset('js/bootstrap.js')}}"></script>
	</body>	
</html>