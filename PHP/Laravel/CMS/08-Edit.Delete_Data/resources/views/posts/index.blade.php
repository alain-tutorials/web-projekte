	@extends('layouts.app')

	@section('content')
		<h1>Posts</h1>
		@php
          $path_01 = 'http://phps.code/laravel/Traversy/';
          $path_02 = '08-Edit.Delete_Data/public';
          $path = $path_01 . $path_02;
        @endphp

		@if (count($posts) > 0)
			{{--  dump($posts) --}}
			@foreach ($posts as $post)
				<div class="well">
					<h3>
						<a href="{{ $path }}/posts/{{ $post->id }}">
							{{ $post->title }}
						</a>
					</h3>
					<small>
						Written on {{ $post->created_at }}
					</small>
				</div>
			@endforeach
			{{ $posts->links() }}
		@else
			<p>No posts found</p>
		@endif
	@endsection