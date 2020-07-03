@extends('layouts.main')


@section('content')
	<div class="row">
		<div class="col-md-5 m-auto">
			@if(session()->has('success'))
			    <div class="card mb-4 border-bottom-success">
	                <div class="card-body">
                  		{{ __('locales.resources.employee.success_create') }}
                  		<a href="{{route('employees.index')}}">
                  			{{ __('locales.resources.employee.success_action') }}
                  		</a>
	                </div>
              	</div>
			@endif
			<div class="card shadow mb-4">
		        <div class="card-header py-3">
		      		<h6 class="m-0 font-weight-bold text-primary">{{ __('locales.resources.employee.create') }}</h6>
		        </div>
		        <div class="card-body">
		        	<form class="user" method="POST" action="{{ route('employees.store') }}">
						@include('partials.employee_form_elements')

						<button type="submit" class="btn btn-primary btn-user btn-block">
							{{ __('locales.resources.employee.create_action') }}
						</button>
						<hr>
					</form>
		        </div>
		  	</div>
		</div>
	</div>
@endsection