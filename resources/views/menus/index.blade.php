<!-- resources/views/menus/index.blade.php -->

@extends('layouts.dashboard')

@section('content')
    <h1>Menu</h1>
    <a href="{{ route('menus.create') }}" class="btn btn-success">Tambah Menu</a>

    @if (session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif

    <div class="row mt-3">
        @foreach ($menus as $menu)
            <div class="col-md-4 mb-4">
                <div class="card">
                    @if ($menu->image)
                        <img src="{{ asset('menu_images/' . $menu->image) }}" class="card-img-top" alt="{{ $menu->title }}">
                    @else
                        <div class="text-center mt-3">
                            No Image
                        </div>
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $menu->title }}</h5>
                        <p class="card-text">{{ $menu->description }}</p>
                        <p class="card-text"><strong>Harga:</strong> {{ $menu->price }}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="{{ route('menus.edit', $menu->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('menus.destroy', $menu->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this menu?')">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
