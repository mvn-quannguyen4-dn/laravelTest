@extends('layouts.app')
@section('title')
Post detail
@endsection
@section('content')
<div class="container">
    @if($message == 'approved')
        <form action="/posts/{{$post->id}}" method="post">
            @csrf
            @method("delete")
            <button type="submit" class="delete-btn">Delete</button></a>
        </form>
    @endif
    <h1>{{$post->title}}</h1>
    <p>{{$post->content}}</p>
</div>
@endsection
