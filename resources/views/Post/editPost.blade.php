@extends('layouts.app')
@section('title')
Create Post
@endsection
@section('content')
@can('update', $post)
<div class="container">
    <form action="/posts/{{$post->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <input name="title" class="form-control" placeholder="Post's title" value="{{$post->title}}">
    </div>
    <div class="form-group">
        <textarea name="content" class="form-control" rows="3" placeholder="Post's content">{{$post->content}}</textarea>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Post') }}
            </button>
        </div>
    </div>
    </form>
</div>
@else
    <h1>You doesn't have permission to edit this post</h1>
@endcan
@endsection