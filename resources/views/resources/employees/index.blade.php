@extends('layouts.main')


@section('content')
	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">
		{{ __('locales.resources.employee.index') }}
	</h1>

	<div class="row">
		<div class="col-md-12">
			<!-- Companies Table -->
			<employees-list></employees-list>
		</div>
	</div>
@endsection
