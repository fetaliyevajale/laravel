@extends('layouts.app')

@section('content')
    <h1>{{ $blog->title }}</h1>
    <p>{{ $blog->content }}</p>
    <a href="{{ route('blogs.index') }}">Back to Blogs</a>
@endsection
