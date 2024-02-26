@extends('layouts.dashboard')

@section('title', 'Edit Gambar')

@section('content')
    <div class="container">
        <h1>Edit Image</h1>

        <form action="{{ route('galleries.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Judul:</label>
                <input type="text" name="title" value="{{ $gallery->title }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi:</label>
                <textarea name="description" class="form-control">{{ $gallery->description }}</textarea>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Update Gambar:</label>
                <input type="file" name="image" class="form-control" accept="image/*">
            </div>

            <button type="submit" class="btn btn-primary">Update Image</button>
        </form>
    </div>
@endsection
