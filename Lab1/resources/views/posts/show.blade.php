@extends('layouts.app')

@section('content')
    <h2>Post Info</h2>
    <div style="margin-bottom: 30px;">
        <p><strong>Title:</strong> {{ $post->title }}</p>
        <p><strong>Description:</strong> {{ $post->description }}</p>
    </div>

    <h2>Post Creator Info</h2>
    <div>
        <p><strong>Name:</strong> {{ $post->posted_by->name }}</p>
        <p><strong>Email:</strong> {{ $post->posted_by->email }}</p>
        <p><strong>Created At:</strong> {{ $post->created_at->format('l jS \\of F Y h:i:s A') }}</p>

    </div>

    <a href="{{ route('posts.index') }}" style="margin-top: 20px; display: inline-block;">← Back to Posts</a>
@endsection
