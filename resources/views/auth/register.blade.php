@extends('layouts.main')

@section('title', 'Register - ' . str_replace('_', ' ', config('app.name', 'Laravel')))

@section('content')
	<div class="row justify-content-center">
		<div class="col-lg-6">
			<main class="form-registration">
				<h1 class="h3 mb-3 fw-normal text-center">Register</h1>
				<form action="{{ route('registration') }}" method="POST">
					@csrf
					<div class="form-floating">
						<input type="text" class="form-control @error('name') is-invalid @enderror rounded-top" name="name" id="name" placeholder="Name" value="{{ old('name') }}" required />
						<label for="name">Name</label>
						@error('name')
							<div class="invalid-feedback mb-3">
								{{ $message }}
							</div>
						@enderror
					</div>
					<div class="form-floating">
						<input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username" placeholder="Username" value="{{ old('username') }}" required />
						<label for="username">Username</label>
						@error('username')
							<div class="invalid-feedback mb-3">
								{{ $message }}
							</div>
						@enderror
					</div>
					<div class="form-floating">
						<input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="name@example.com" value="{{ old('email') }}" required />
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
					<button class="w-100 btn btn-lg btn-primary my-3" type="submit" title="Register">Register</button>
				</form>
				<small class="d-block text-center">Already registered? <a href="{{ route('login') }}" title="Login">Login</a></small>
			</main>
		</div>
	</div>
@endsection
