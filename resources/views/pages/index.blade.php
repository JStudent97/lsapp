
@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1> Welcome to Laravel!</h1>
        <p> This is my first laravel application built to learn the framework. Enjoy :)</p>
        @guest
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a><a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
        @endguest
        @auth
            <?php $posts_no = count(auth()->user()->posts); ?>
            <h4> Welcome {{auth()->user()->name}}! You currently have <?php echo $posts_no ?> <?php if ($posts_no !== 1) echo "posts"; else echo "post"; ?> online! Check their status </h4>
        @endauth
    </div>
@endsection