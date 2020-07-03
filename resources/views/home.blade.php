@extends('layouts.main')


@section('content')
	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">{{__('locales.sidebar.dashboard')}}</h1>

	<div class="row">
		<div class="col-md-8">
			<!-- Companies Table -->
			<companies-list></companies-list>
		</div>
		<div class="col-md-4">
			<weather-module></weather-module>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8">
			<!-- Companies Table -->
			<employees-list></employees-list>
		</div>
		<div class="col-md-4">
			<time-module></time-module>
		</div>
	</div>
@endsection
