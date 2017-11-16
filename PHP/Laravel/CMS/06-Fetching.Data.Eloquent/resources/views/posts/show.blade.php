	@extends('layouts.app')
	
	@section('content')
		@php
          $path_01 = 'http://phps.code/laravel/Traversy/';
          $path_02 = '06-Fetching.Data.Eloquent/public';
          $path = $path_01 . $path_02;
        @endphp
		{{-- dump($post) --}}
		<a href="{{ $path }}/posts" class="btn btn-default">
			Go back
		</a>
		<h1>{{ $post->title }}</h1>
		
		<div>
			{{ $post->body }}
		</div>
		<small>written on {{ $post->created_at }}</small>
	@endsection