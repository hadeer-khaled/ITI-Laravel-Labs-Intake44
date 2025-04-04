@extends('layouts.app')

@section('content')
    <h2>Create New Post</h2>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" required>

        <label for="description">Description:</label>
        <textarea name="description" id="description" required></textarea>

        <label for="user_id">Posted By:</label>
        <select name="user_id" id="user_id" required>
            <option value="">Select a user</option>
            @foreach($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>
        
        <button type="submit">Create Post</button>
    </form>
@endsection
