@extends('layouts.app')

@section('content')
    <h1>Blogs</h1>
    <a href="{{ route('blogs.create') }}">Create Blog</a>
    
    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blogs as $blog)
                <tr>
                    <td>{{ $blog->title }}</td>
                    <td>
                        <a href="{{ route('blogs.show', $blog) }}">View</a>
                        <a href="{{ route('blogs.edit', $blog) }}">Edit</a>
                        <form action="{{ route('blogs.destroy', $blog) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
