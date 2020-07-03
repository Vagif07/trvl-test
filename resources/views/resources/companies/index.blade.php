@extends('layouts.main')


@section('content')
	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">
		{{ __('locales.resources.company.index') }}
	</h1>

	<div class="row">
		<div class="col-md-12">
			<!-- Companies Table -->
			<companies-list></companies-list>
		</div>
	</div>
@endsection
