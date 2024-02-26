<!-- resources/views/menus/edit.blade.php -->

@extends('layouts.dashboard')

@section('content')
    <h1>Edit Menu</h1>

    <form action="{{ route('menus.update', $menu->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Add your form fields here -->
        <div class="mb-3">
            <label for="no_menu" class="form-label">No Menu</label>
            <input type="number" class="form-control" id="no_menu" name="no_menu" value="{{ $menu->no_menu }}" required>
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Menu</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $menu->title }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="description" name="description">{{ $menu->description }}</textarea>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Harga</label>
            <input type="text" class="form-control" id="price" name="price" value="{{ $menu->price }}" required>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Gambar</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>

        <button type="submit" class="btn btn-primary">Perbarui</button>
    </form>
@endsection
