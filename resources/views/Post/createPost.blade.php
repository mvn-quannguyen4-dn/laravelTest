@extends('layouts.app')
@section('title')
Create Post
@endsection
@section('content')
@can('create', App\Models\Post::class)
<div class="create-post-form container">
    <form action="/posts" method="POST">
    @csrf
    <div class="form-group">
        <input name="title" class="form-control" placeholder="Post's title">
    </div>
    <div class="form-group">
        <textarea name="content" class="form-control" rows="3" placeholder="Post's content"></textarea>
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
    <h1>You doesn't have permission to create new post</h1>
@endcan
@endsection