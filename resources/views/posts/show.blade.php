@extends('layouts.app')

@section('content')
<a href="/posts" class="btn btn-default">Go back</a>
<h2>{{$post->title}}</h2>
<div>{{$post->body}}</div>
<hr>
<small>Written On {{$post->created_at}}</small>
@endsection