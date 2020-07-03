<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<title>{{ config('app.name', 'Laravel') }}</title>

		<!-- Scripts -->
		<script src="{{ asset('js/app.js') }}" defer></script>

		<!-- Fonts -->
		<link rel="dns-prefetch" href="//fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

		<!-- Styles -->
		<link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	</head>

	<body id="page-top">

		<!-- Page Wrapper -->
		<div id="wrapper">

			@include('partials.sidebar')

			<!-- Content Wrapper -->
			<div id="content-wrapper" class="d-flex flex-column">

				<!-- Main Content -->
				<div id="content">
					
					@include('partials.topbar')
					
					<!-- Begin Page Content -->
					<div class="container-fluid">
						@yield('content')
					</div>
					<!-- /.container-fluid -->

				</div>
				<!-- End of Main Content -->

				@include('partials.footer')

			</div>
			<!-- End of Content Wrapper -->
		</div>
		<!-- End of Page Wrapper -->

		@include('partials.logout')
		

		@yield('js')
	</body>
</html>
