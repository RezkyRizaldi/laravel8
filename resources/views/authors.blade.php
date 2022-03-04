@extends('layouts.main')

@section('title', 'Post Authors - ' . str_replace('_', ' ', config('app.name', 'Laravel')))

@section('content')
  <div class="row align-items-center">
		<div class="col-md-3">
			<h2 class="heading-4 mb-3">Post Authors</h2>
		</div>
		<div class="col-md-3">
			<p class="fs-6 text-end mb-0">
				<i class="fa fa-eye me-2"></i>
				<a class="text-decoration-none link-dark" href="{{ route('posts') }}" title="View All Posts">View All Posts</a>
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			@forelse ($authors as $author)
				<div class="list-group">
					<a class="list-group-item list-group-item-action" href="{{ route('author.show', ['author' => $author->username]) }}" title="{{ $author->posts_count }} posts by {{ $author->name }}">
						<div class="d-flex w-100 justify-content-between align-items-center">
							<span>{{ $author->name }}</span>
							<small class="badge bg-primary rounded-pill">{{ $author->posts_count }}</small>
						</div>
					</a>
				</div>
				@empty
				<em>Post Authors is empty.</em>
			@endforelse
		</div>
	</div>
@endsection
