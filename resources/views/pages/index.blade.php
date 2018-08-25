@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
<h2><?php echo e($title); ?></h2>
<p>This is the home page</p>
<p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a><a class="btn btn-success btn-lg" href="/login" role="button">Register</a></p>
</div>
@endsection