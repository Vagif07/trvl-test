<!-- Form Elements Start -->
@csrf

<div class="form-group">
	<input
		type="text"
		class="form-control form-control-user @error('name') is-invalid @enderror"
		placeholder="{{ __('locales.resources.company.name') }}"
		name="name"
		value="{{ $company->name ?? old('name') }}"
		required
	>
	@error('name')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
	@enderror
</div>

<div class="form-group">
	<input
		type="email"
		class="form-control form-control-user @error('email') is-invalid @enderror"
		placeholder="{{ __('locales.resources.company.email') }}"
		name="email"
		value="{{ $company->email ?? old('email') }}"
	>
	@error('email')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
	@enderror
</div>

<div class="form-group form-file">
	<input
		type="file"
		id="logo"
		class="@error('logo') is-invalid @enderror"
		name="logo"
	>
	<label
		id="logo_label"
		class="form-control"
		for="logo"
	>
		{{ $company->logo ?? __('locales.resources.company.logo') }}
	</label>
	@error('logo')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
	@enderror
</div>

<div class="form-group">
	<input
		type="text"
		class="form-control form-control-user @error('website') is-invalid @enderror"
		placeholder="{{ __('locales.resources.company.website') }}"
		name="website"
		value="{{ $company->website ?? old('website') }}"
	>
	@error('website')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
	@enderror
</div>
<!-- Form Elements End -->