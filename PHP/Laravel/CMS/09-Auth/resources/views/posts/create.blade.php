	@extends('layouts.app')

	@section('content')
		<h1>Create Post</h1>
		
      {!! Form::open( 
        ['action' => 'PostsController@store','method' => 'POST']) !!}
        <div class="form-group">
          {{ Form::label('title', 'Title') }}
          {{ Form::text('title','',  
            ['class' => 'form-control','placeholder' => 'title']) }}
        </div>

        <div class="form-group">
          {{ Form::label('body', 'Body') }}
          {{ Form::textarea('body','',  
            /* von layouts.app.blade.php */
            [  'id' => 'article-ckeditor', 
              'class' => 'form-control',
              'placeholder' => 'Body Text'
            ]) }}
        </div>
        {{ Form::submit('submit', ['class' => 'btn btn-primary']) }}
    
		{!! Form::close() !!}

	@endsection