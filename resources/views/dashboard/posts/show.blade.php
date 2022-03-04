@extends('layouts.main')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<h2 class="heading-4">Post Details</h2>
				<!-- <p class="lead"><i class="fa fa-user-edit me-2"></i><strong><a class="text-decoration-none link-dark" href="{{ route('posts', ['author' => $post->author->username]) }}">{{ $post->author->name }}</a></strong><i class="fa fa-clock mx-2 text-muted"></i><small class="text-muted">{{ $post->published_at }}</small></p> -->
				<a href="{{ route('dashboard.posts') }}" class="btn btn-success">
					<span data-feather="arrow-left"></span>
					Back to Posts
				</a>
				<a href="" class="btn btn-warning">
					<span data-feather="edit"></span>
					Edit
				</a>
				<a href="" class="btn btn-danger">
					<span data-feather="x-circle"></span>
					Delete
				</a>
			</div>
			<div class="col-md-8 mt-3">
				<div class="card shadow-sm">
					<div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.5)">
						<a class="text-decoration-none link-light" href="{{ route('posts', ['category' => $post->category->slug]) }}" title="{{ $post->category->name }}"><i class="fa fa-list-alt me-2"></i>{{ $post->category->name }}</a>
					</div>
					<img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}" />
					<div class="card-body">
						<article>
							<h2 class="card-title">{{ $post->title }}</h2>
							{!! $post->body ?? '<em>No description added.</em>' !!}
							<a class="card-link text-decoration-none link-dark d-block mt-3" href="{{ route('posts') }}" title="Back to Blog Posts"><i class="fa fa-arrow-left me-2"></i>Back to Blog Posts</a>
						</article>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
