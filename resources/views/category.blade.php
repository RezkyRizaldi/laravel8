@extends('layouts.main')

@section('title', $category . ' | Post Category - ' . str_replace('_', ' ', config('app.name', 'Laravel')))

@section('content')
  <div class="row align-items-center">
		<div class="col-md-9">
			<h2 class="heading-4 mb-3">Posts in {{ $category }} Category</h2>
		</div>
		<div class="col-md-3">
			<p class="fs-6 text-end mb-0">
				<i class="fa fa-eye me-2"></i>
				<a class="text-decoration-none link-dark" href="{{ route('categories') }}" title="View All Categories">View All Categories</a>
			</p>
		</div>
	</div>
	<div class="row">
		@if ($posts->count())
			<div class="col-md-12">
				<div class="card shadow-sm border-0 mb-5">
					<div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.5)">
						<a class="text-decoration-none link-light" href="{{ route('category.show', ['category' => $posts[0]->category->slug]) }}" title="{{ $posts[0]->category->name }}"><i class="fa fa-list-alt me-2"></i>{{ $posts[0]->category->name }}</a>
					</div>
					<img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}" />
					<div class="card-body text-center">
						<article>
							<h2 class="card-title">
								<a class="text-decoration-none link-dark" href="{{ route('post.show', ['post' => $posts[0]->slug]) }}" title="{{ $posts[0]->title }}">
									{{ $posts[0]->title }}
								</a>
							</h2>
							<h6 class="card-subtitle mb-3 fw-light"><i class="fa fa-user-edit me-2"></i><strong><a class="text-decoration-none link-dark" href="{{ route('author.show', ['author' => $posts[0]->author->username]) }}">{{ $posts[0]->author->name }}</a></strong><i class="fa fa-clock mx-2 text-muted"></i><small class="text-muted">{{ $posts[0]->published_at }}</small></h6>
							<p class="card-text">{{ $posts[0]->excerpt }}</p>
							<a class="btn btn-primary" href="{{ route('post.show', ['post' => $posts[0]->slug]) }}" title="Read More">Read More<i class="fa fa-arrow-right ms-2"></i></a>
						</article>
					</div>
				</div>
			</div>
		@endif

		@forelse ($posts->skip(1) as $post)
			<div class="col-md-4 mb-3">
				<div class="card shadow-sm border-0">
				<div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.5)">
					<a class="text-decoration-none link-light" href="{{ route('category.show', ['category' => $post->category->slug]) }}" title="{{ $post->category->name }}"><i class="fa fa-list-alt me-2"></i>{{ $post->category->name }}</a>
				</div>
				<img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}" />
					<div class="card-body">
						<article>
							<h2 class="card-title">
								<a class="text-decoration-none link-dark" href="{{ route('post.show', ['post' => $post->slug]) }}" title="{{ $post->title }}">
									{{ $post->title }}
								</a>
							</h2>
							<h6 class="card-subtitle mb-3 fw-light"><i class="fa fa-user-edit me-2"></i><strong><a class="text-decoration-none link-dark" href="{{ route('author.show', ['author' => $post->author->username]) }}">{{ $post->author->name }}</a></strong><i class="fa fa-clock mx-2 text-muted"></i><small class="text-muted">{{ $post->published_at }}</small></h6>
							<p class="card-text">{!! $post->excerpt ?? '<em>No description added.</em>' !!}</p>
							<a class="card-link text-decoration-none link-dark" href="{{ route('post.show', ['post' => $post->slug]) }}" title="Read More">Read More<i class="fa fa-arrow-right ms-2"></i></a>
						</article>
					</div>
				</div>
			</div>
			@empty
			<div class="col-md-4">
				<em>Blog Posts is empty.</em>
			</div>
		@endforelse
	</div>
@endsection
