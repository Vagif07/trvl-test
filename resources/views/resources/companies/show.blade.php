@extends('layouts.main')


@section('content')
	<div class="row">
		<div class="col-md-9 m-auto">
			<div class="card shadow mb-4">
		        <div class="card-header py-3">
		      		<h6 class="m-0 font-weight-bold text-primary">
		      			{{__('locales.resources.company.show_title', ['name' => $company->name])}}
		      		</h6>
		        </div>
		        <div class="card-body">
		        	<div class="row">
			        	<div class="col-md-6 mb-4 mx-auto">
			        		<div class="card-image m-auto">
				        		@isset ($company->logo)
								    <img src="/storage/{{$company->logo}}" alt="logo">
								@endisset
				    	    </div>
			        	</div>
			        </div>
			        <div class="row">
			        	<div class="col-md-8 m-auto">
			        		<div class="row">
				        		<div class="col-md-6 text-left">
				        			<b>{{ __('locales.resources.company.name') }}:</b> {{$company->name}} <br>
				        			<b>{{ __('locales.resources.company.email') }}:</b> {{$company->email}}
				        		</div>
				        		<div class="col-md-6 text-right">
				        			<b>{{ __('locales.resources.company.website') }}:</b> <a href="{{$company->website}}">{{$company->website}}</a> <br>
				        			<b>{{ __('locales.created_at') }}:</b> {{$company->created_at}}
				        		</div>
			        		</div>
			        	</div>
		        	</div>
		        	<div class="row">
		        		<div class="col-md-8 m-auto">
		        			<div class="row">
				        		<div class="col-md-6 text-left my-2">
				        			<a href="{{route('companies.edit', $company->id)}}" class="btn btn-primary btn-icon-split">
					                    <span class="icon text-white-50">
					                      <i class="fas fa-pencil-alt"></i>
					                    </span>
					                    <span class="text">{{ __('locales.resources.company.edit_title', ['name' => $company->name]) }}</span>
				                  	</a>
				        		</div>
				        		<div class="col-md-6 text-right my-2">
				        			<form action="{{route('companies.destroy', $company->id)}}" method="post">
				        				@csrf
				        				<input type="hidden" name="_method" value="DELETE">
					                  	<button type="submit" class="btn btn-danger btn-icon-split">
						                    <span class="icon text-white-50">
						                      <i class="fas fa-trash"></i>
						                    </span>
						                    <span class="text">{{ __('locales.resources.company.delete_title', ['name' => $company->name]) }}</span>
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

	<employees-list company_id="{{$company->id}}"></employees-list>

@endsection
