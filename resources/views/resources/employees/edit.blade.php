@extends('layouts.main')

@section('content')
	<div class="row">
		<div class="col-md-5 m-auto">
			@if(session()->has('success'))
			    <div class="card mb-4 border-bottom-success">
	                <div class="card-body">
                  		{{ __('locales.resources.employee.success_edit') }}
                  		<a href="{{route('employees.index')}}">
                  			{{ __('locales.resources.employee.success_action') }}
                  		</a>
	                </div>
              	</div>
			@endif
			<div class="card shadow mb-4">
		        <div class="card-header py-3">
		      		<h6 class="m-0 font-weight-bold text-primary">
			      		{{
			      			__('locales.resources.employee.edit_title', [
		      					'name' => $employee->first_name . " " . $employee->last_name
		      				]) 
			      		}}
			      	</h6>
		        </div>
		        <div class="card-body">
		        	<form class="user" method="POST" action="{{ route('employees.update', $employee) }}">
						@include('partials.employee_form_elements')

						<input type="hidden" name="_method" value="PUT">

						<button type="submit" class="btn btn-primary btn-user btn-block">
							{{ __('locales.resources.employee.edit_action') }}
						</button>
						<hr>
					</form>
		        </div>
		  	</div>
		</div>
	</div>
@endsection