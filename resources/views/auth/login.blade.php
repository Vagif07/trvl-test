@extends('layouts.app')

@section('content')
	<div class="card o-hidden border-0 shadow-lg my-5">
		<div class="card-body p-0">
			<!-- Nested Row within Card Body -->
			<div class="row">
				<div class="col-lg-12">
					<div class="p-5">
						<div class="text-center">
							<h1 class="h4 text-gray-900 mb-4">{{ __('auth.login.welcome') }}</h1>
						</div>
						<form class="user" method="POST" action="{{ route('login') }}">
							@csrf

							<div class="form-group">
								<input
									type="email"
									class="form-control form-control-user @error('email') is-invalid @enderror" placeholder="{{ __('auth.login.email') }}"
									name="email"
									value="{{ old('email') }}"
									required
								>
								@error('email')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>

							<div class="form-group">
								<input
									type="password"
									class="form-control form-control-user @error('email') is-invalid @enderror" placeholder="{{ __('auth.login.password') }}"
									name="password"
									required
								>
								@error('password')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>

							<div class="form-group">
								<div class="custom-control custom-checkbox small">
									<input
										class="custom-control-input"
										type="checkbox"
										name="remember"
										id="customCheck"
										{{ old('remember') ? 'checked' : '' }}
									>
									<label class="custom-control-label" for="customCheck">{{ __('auth.login.remember') }}</label>
								</div>
							</div>

							<button type="submit" class="btn btn-primary btn-user btn-block">
								{{ __('auth.login.action') }}
							</button>
							<hr>
						</form>
						<div class="text-center">
							<a class="small" href="{{ route('password.request') }}">{{ __('auth.login.forgot') }}</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection