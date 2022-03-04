@extends('layouts.main')

@section('content')
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Posts</h1>
	</div>

	<div class="table-responsive col-lg-8">
		<table class="table table-striped">
			<thead>
				<tr>
					<th scope="col">No.</th>
					<th scope="col">Title</th>
					<th scope="col">Category</th>
					<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
				@forelse ($posts as $post)
					<tr>
						<td>{{ $loop->iteration }}</td>
						<td>{{ $post->title }}</td>
						<td>{{ $post->category->name }}</td>
						<td>
							<a href="{{ route('posts.show', ['slug' => $post->slug]) }}" class="badge bg-info">
								<span data-feather="eye"></span>
							</a>
							<a href="" class="badge bg-warning">
								<span data-feather="edit"></span>
							</a>
							<a href="" class="badge bg-danger">
								<span data-feather="x-circle"></span>
							</a>
						</td>
					</tr>
					@empty
					<tr>
						<td colspan="4">No posts found.</td>
					</tr>
				@endforelse
			</tbody>
		</table>
	</div>
@endsection
