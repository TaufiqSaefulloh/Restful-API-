@extends('layouts.app')
@section('content')
    <div class="container">
        <h2>List Post</h2>
        <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Tambah Post</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Judul</th>
                    <th>Konten</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $key => $post)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td><img src="{{ asset('storage/posts/' . $post->image) }}" width="100"></td>
                        <td>{{ $post->title }}</td>
                        <td>{{ Str::limit($post->content, 50) }}</td>
                        <td>
                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
