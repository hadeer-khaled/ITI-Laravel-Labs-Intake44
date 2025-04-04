@extends('layouts.app')

@section('content')
    <h2>All Posts</h2>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    @if($posts->isEmpty())
        <p>No posts available.</p>
    @else
        <table border="1" cellpadding="10">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Posted By</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->description }}</td> 
                        <td>{{ $post->posted_by->name ?? 'Unknown' }}</td>
                        {{-- <td>{{ $post->created_at->format('Y-m-d H:i') }}</td> --}}
                        {{-- <td>{{ $post->created_at }}</td> --}}
                        <td>{{ $post->created_at_formatted}}</td>
                        <td>
                            <a href="{{ route('posts.show', $post->id) }}" style="color: blue;">View</a> |

                            <a href="{{ route('posts.edit', $post) }}" style="color: green;">Edit</a> |

                            <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="color: red; background: none; border: none; cursor: pointer;">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
