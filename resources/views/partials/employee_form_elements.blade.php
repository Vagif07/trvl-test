<!-- Form Elements Start -->
@csrf

<div class="form-group">
	<input
		type="text"
		class="form-control form-control-user @error('f_name') is-invalid @enderror"
		placeholder="{{ __('locales.resources.employee.first_name') }}"
		name="f_name"
		value="{{ $employee->first_name ?? old('f_name') }}"
		required
	>
	@error('f_name')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
	@enderror
</div>

<div class="form-group">
	<input
		type="text"
		class="form-control form-control-user @error('l_name') is-invalid @enderror"
		placeholder="{{ __('locales.resources.employee.last_name') }}"
		name="l_name"
		value="{{ $employee->last_name ?? old('l_name') }}"
		required
	>
	@error('l_name')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
	@enderror
</div>

<div class="form-group">
	<select
		class="form-control form-select @error('company_id') is-invalid @enderror"
		name="company_id"
		value="{{ $employee->company_id ?? old('company_id') }}"
		required
	>
		<option>
			{{ __('locales.resources.employee.company') }}
		</option>
		@foreach ($companies as $company)
			<option
				value="{{$company->id}}"
				{{ $company->id == ($employee->company_id ?? old('company_id'))  ? 'selected="selected"' : '' }}
			>
				{{$company->name}}
			</option>
		@endforeach
	</select>
	@error('company_id')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
	@enderror
</div>

<div class="form-group">
	<input
		type="email"
		class="form-control form-control-user @error('email') is-invalid @enderror"
		placeholder="{{ __('locales.resources.employee.email') }}"
		name="email"
		value="{{ $employee->email ?? old('email') }}"
	>
	@error('email')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
	@enderror
</div>

<div class="form-group">
	<input
		type="number"
		class="form-control form-control-user @error('phone') is-invalid @enderror"
		placeholder="{{ __('locales.resources.employee.phone') }}"
		name="phone"
		value="{{ $employee->phone ?? old('phone') }}"
	>
	@error('phone')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
	@enderror
</div>
<!-- Form Elements End -->