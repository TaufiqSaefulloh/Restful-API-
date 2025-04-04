@extends('layouts.app')
@section('content')
    <div class="container">
        <h2>Edit Post</h2>
        <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Gambar</label>
                <input type="file" name="image" class="form-control">
                <img src="{{ asset('storage/posts/' . $post->image) }}" width="100" class="mt-2">
            </div>
            <div class="mb-3">
                <label class="form-label">Judul</label>
                <input type="text" name="title" class="form-control" value="{{ $post->title }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Konten</label>
                <textarea name="content" class="form-control" required>{{ $post->content }}</textarea>
            </div>
            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
@endsection
