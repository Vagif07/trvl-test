@extends('layouts.main')


@section('content')
	<div class="row">
		<div class="col-md-5 m-auto">
			@if(session()->has('success'))
			    <div class="card mb-4 border-bottom-success">
	                <div class="card-body">
                  		{{ __('locales.resources.company.success_edit') }}
                  		<a href="{{route('companies.index')}}">
                  			{{ __('locales.resources.company.success_action') }}
                  		</a>
	                </div>
              	</div>
			@endif
			<div class="card shadow mb-4">
		        <div class="card-header py-3">
		      		<h6 class="m-0 font-weight-bold text-primary">
		      			{{__('locales.resources.company.edit_title', ['name' => $company->name])}}
		      		</h6>
		        </div>
		        <div class="card-body">
		        	<form class="user" method="POST" action="{{ route('companies.update', $company) }}" enctype="multipart/form-data">
						@include('partials.company_form_elements')

						<input type="hidden" name="_method" value="PUT">

						<button type="submit" class="btn btn-primary btn-user btn-block">
							{{ __('locales.resources.company.edit_action') }}
						</button>
						<hr>
					</form>
		        </div>
		  	</div>
		</div>
	</div>
	<div class="row mb-4">
		<div class="col-md-5 m-auto">
			@isset ($company->logo)
			    <img class="mw-100" src="/storage/{{$company->logo}}" alt="logo">
			@endisset
		</div>
	</div>
@endsection

@section('js')
	<script src="{{ asset('js/file_input.js') }}" defer></script>
@endsection
