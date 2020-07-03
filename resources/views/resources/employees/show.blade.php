@extends('layouts.main')


@section('content')
	
	<div class="row">
		<div class="col-md-9 m-auto">
			<div class="card shadow mb-4">
		        <div class="card-header py-3">
		      		<h6 class="m-0 font-weight-bold text-primary">
		      			{{
		      				__('locales.resources.employee.show_title', [
		      					'name' => $employee->first_name . " " . $employee->last_name
		      			  	])
		      			}}
		      		</h6>
		        </div>
		        <div class="card-body">
			        <div class="row">
			        	<div class="col-md-8 m-auto">
			        		<div class="row">
				        		<div class="col-md-6 text-left">
				        			<b>{{ __('locales.resources.employee.first_name') }}:</b> {{$employee->first_name}}
			        				<br>
				        			<b>{{ __('locales.resources.employee.last_name') }}:</b> {{$employee->last_name}}
				        		</div>
				        		<div class="col-md-6 text-right">
				        			<b>{{ __('locales.resources.employee.email') }}:</b> {{$employee->email}} <br>
				        			<b>{{ __('locales.resources.employee.phone') }}:</b> {{$employee->phone}}
				        		</div>
			        		</div>
			        	</div>
		        	</div>
		        	<div class="row">
		        		<div class="col-md-8 m-auto">
		        			<div class="row">
				        		<div class="col-md-6 text-left my-2">
				        			<a href="{{route('employees.edit', $employee->id)}}" class="btn btn-primary btn-icon-split">
					                    <span class="icon text-white-50">
					                      <i class="fas fa-pencil-alt"></i>
					                    </span>
					                    <span class="text">
											{{
												__('locales.resources.employee.edit_title', [
							      					'name' => $employee->first_name . " " . $employee->last_name
							      			  	])
							      			}}
					                    </span>
				                  	</a>
				        		</div>
				        		<div class="col-md-6 text-right my-2">
				        			<form action="{{route('employees.destroy', $employee->id)}}" method="post">
				        				@csrf
				        				<input type="hidden" name="_method" value="DELETE">
					                  	<button type="submit" class="btn btn-danger btn-icon-split">
						                    <span class="icon text-white-50">
						                      <i class="fas fa-trash"></i>
						                    </span>
						                    <span class="text">
											{{
												__('locales.resources.employee.delete_title', [
							      					'name' => $employee->first_name . " " . $employee->last_name
							      			  	])
							      			}}
					                    </span>
					                  	</button>
				        			</form>
				        		</div>
				        	</div>
				        </div>
		        	</div>
				</div>
		  	</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-9 m-auto">
			<div class="card shadow mb-4">
		        <div class="card-header py-3">
		      		<h6 class="m-0 font-weight-bold text-primary">
		      			{{__('locales.resources.employee.company_show_title', ['name' => $employee->company->name])}}
		      		</h6>
		        </div>
		        <div class="card-body">
		        	<div class="row">
			        	<div class="col-md-6 mb-4 mx-auto">
			        		<div class="card-image m-auto">
				        		@isset ($employee->company->logo)
								    <img src="/storage/{{$employee->company->logo}}" alt="logo">
								@endisset
				    	    </div>
			        	</div>
			        </div>
			        <div class="row">
			        	<div class="col-md-8 m-auto">
			        		<div class="row">
				        		<div class="col-md-6 text-left">
				        			<b>{{ __('locales.resources.company.name') }}:</b> {{$employee->company->name}} <br>
				        			<b>{{ __('locales.resources.company.email') }}:</b> {{$employee->company->email}}
				        		</div>
				        		<div class="col-md-6 text-right">
				        			<b>{{ __('locales.resources.company.website') }}:</b> <a href="{{$employee->company->website}}">{{$employee->company->website}}</a> <br>
				        			<b>{{ __('locales.created_at') }}:</b> {{$employee->company->created_at}}
				        		</div>
			        		</div>
			        	</div>
		        	</div>
		        	<div class="row">
		        		<div class="col-md-6 mx-auto text-center my-2">
		        			<a href="{{route('companies.edit', $employee->company->id)}}" class="btn btn-primary btn-icon-split">
			                    <span class="icon text-white-50">
			                      <i class="fas fa-pencil-alt"></i>
			                    </span>
			                    <span class="text">{{ __('locales.resources.company.edit_title', ['name' => $employee->company->name]) }}</span>
		                  	</a>
		        		</div>
		        	</div>
				</div>
		  	</div>
		</div>
	</div>

@endsection
