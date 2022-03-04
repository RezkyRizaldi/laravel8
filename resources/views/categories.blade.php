@extends('layouts.main')

@section('title', 'Post Categories - ' . str_replace('_', ' ', config('app.name', 'Laravel')))

@section('content')
  <div class="row">
		<div class="col-md-12">
			<h2 class="heading-4 mb-3">Post Categories</h2>
		</div>
	</div>
	<div class="row">
		@forelse ($categories as $category)
			<div class="col-md-4">
				<a href="{{ route('posts', ['category' => $category->slug]) }}" title="{{ $category->name }}">
					<div class="card bg-dark text-light">
						<img src="https://source.unsplash.com/500x400?{{ $category->name }}" class="card-img" alt="{{ $category->name }}" />
						<div class="card-img-overlay d-flex align-items-center p-0">
							<h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0, 0, 0, 0.5)">{{ $category->name }} ({{ $category->posts_count }})</h5>
						</div>
					</div>
				</a>
			</div>
			@empty
			<div class="col-md-4">
				<em>Post Categories is empty.</em>
			</div>
		@endforelse
	</div>
@endsection
