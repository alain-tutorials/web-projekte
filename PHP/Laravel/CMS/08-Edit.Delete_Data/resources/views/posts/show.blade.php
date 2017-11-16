	@extends('layouts.app')
	
	@section('content')
		@php
          $path_01 = 'http://phps.code/laravel/Traversy/';
          $path_02 = '08-Edit.Delete_Data/public';
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
		<hr>
		<a href="{{ $path }}/posts/{{ $post->id }}/edit"
		 class="btn btn-default">
			Edit
		</a>
		{!! Form::open( 
        [
          'action' => ['PostsController@destroy', $post->id],
          'method' => 'POST',
      		'class' => 'pull-right']) 
        !!}
        	{{ Form::hidden('_method','DELETE') }}
        	{{ Form::submit('Delete',['class' => 'btn btn-danger']) }}
        {!!Form::close()!!}
	@endsection