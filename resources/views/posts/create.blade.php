@extends ('layouts.app');

@section('content')
    <h3>Create Post</h3>
    {!! Form::open(['action' => 'PostsController@store', 'method'=> 'POST']) !!}
    <div calss="form-group">
        {{Form::label('title', 'title')}}
        {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
    </div>
    <div calss="form-group">
        {{Form::label('body', 'body')}}
        {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Body'])}}
    </div>
    {{Form::submit('submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection