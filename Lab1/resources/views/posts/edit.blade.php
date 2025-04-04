@extends('layouts.app')

@section('content')
    <h2>Edit Post</h2>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="{{ old('title', $post->title) }}" required>

        <label for="description">Description:</label>
        <textarea name="description" id="description" required>{{ old('description', $post->description) }}</textarea>

        <label for="user_id">Posted By:</label>
        <select name="user_id" id="user_id" required>
            @foreach($users as $user)
                <option value="{{ $user->id }}" {{ old('user_id', $post->user_id) == $user->id ? 'selected' : '' }}>
                    {{ $user->name }}
                </option>
            @endforeach
        </select>

        <button type="submit">Update Post</button>
        <a href="{{ route('posts.index') }}" style="color: red;">Cancel</a>
    </form>
@endsection
