@extends('layouts.main')

@section('title', 'Login - ' . str_replace('_', ' ', config('app.name', 'Laravel')))

@section('content')
	<div class="row justify-content-center">
		<div class="col-md-6">
			<main class="form-signin">
				@if(session()->has('success'))
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						{{ session('success') }}
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
				@endif
				@if(session()->has('error'))
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						{{ session('error') }}
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
				@endif
				<h1 class="h3 mb-3 fw-normal text-center">Login</h1>
				<form action="{{ route('authenticate') }}" method="POST">
					@csrf
					<div class="form-floating">
						<input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="name@example.com" value="{{ old('email') }}" required autofocus />
						<label for="email">Email</label>
						@error('email')
							<div class="invalid-feedback mb-3">
								{{ $message }}
							</div>
						@enderror
					</div>
					<div class="form-floating">
						<input type="password" class="form-control @error('password') is-invalid @enderror rounded-bottom" name="password" id="password" placeholder="Password" required />
						<label for="password">Password</label>
						@error('password')
							<div class="invalid-feedback">
								{{ $message }}
							</div>
						@enderror
					</div>
					<button class="w-100 btn btn-lg btn-primary my-3" type="submit" title="Login">Login</button>
				</form>
				<small class="d-block text-center">Not registered? <a href="{{ route('register') }}" title="Register">Register Now!</a></small>
			</main>
		</div>
	</div>
@endsection
