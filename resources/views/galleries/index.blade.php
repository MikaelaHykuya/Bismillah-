@extends('layouts.dashboard')

@section('title', 'CRUD Galeri')

@section('content')
    <div class="card">
        @if (session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif
        <div class="card-header bg-primary text-white">
            <h2 class="card-title">Galeri</h2>
        </div>
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mt-3">
                <a href="{{ route('galleries.create') }}" class="btn btn-success">Tambah Galeri</a>
            </div>
            <div class="d-flex flex-wrap">
                @foreach($galleries as $gallery)
                    <div class="card m-2" style="width: 18rem;">
                        <img src="{{ asset('images/' . $gallery->image_path) }}" class="card-img-top"
                        alt="{{ $gallery->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $gallery->title }}</h5>
                            <p class="card-text">{{ $gallery->description }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="{{ route('galleries.edit', $gallery->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('galleries.destroy', $gallery->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
