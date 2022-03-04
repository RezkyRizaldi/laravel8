<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" />

		<!-- Google Fonts -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" />

		<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

		<!-- CSS -->
		<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />

    <title>@yield('title', str_replace('_', ' ', config('app.name', 'Laravel')))</title>
  </head>
  <body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
			<div class="container">
				<a class="navbar-brand" href="/" title="{{ config('app.name', 'Laravel') }}">{{ config('app.name', 'Laravel') }}</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">
						@auth
							<li class="nav-item">
								<a class="nav-link {{ request()->is('home*') ? 'active' : '' }}" aria-current="page" href="{{ route('home') }}" title="Home">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link {{ request()->is('posts*') ? 'active' : '' }}" href="{{ route('posts') }}" title="Blog">Blog</a>
							</li>
						@endauth
					</ul>
					<ul class="navbar-nav ms-auto">
						@auth
							<li class="nav-item dropdown dropdown-end">
								<a class="nav-link dropdown-toggle {{ request()->is('login*') ? 'active' : '' }}" href="javascript:void(0)" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									{{ auth()->user()->name }}
								</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
									<li>
										<a href="{{ route('dashboard') }}" class="dropdown-item">
											Dashboard
											<i class="fa fa-chart-line"></i>
										</a>
									</li>
									<li><hr class="dropdown-divider" /></li>
									<li>
										<form action="{{ route('logout') }}" method="POST">
											@csrf
											<button class="dropdown-item" type="submit">
												Logout
												<i class="fa fa-sign-out-alt"></i>
											</button>
										</form>
									</li>
								</ul>
							</li>
						@else
							<li class="nav-item">
								<a class="nav-link {{ request()->is('login*') ? 'active' : '' }}" href="{{ route('login') }}" title="Login">Login
									<i class="fa fa-sign-in-alt"></i>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link {{ request()->is('register*') ? 'active' : '' }}" href="{{ route('register') }}" title="Register">Register
									<i class="fa fa-door-open"></i>
								</a>
							</li>
						@endauth
					</ul>
				</div>
			</div>
		</nav>
		<div class="container my-5">
			@yield('content')
		</div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
