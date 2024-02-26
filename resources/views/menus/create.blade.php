<!-- resources/views/menus/create.blade.php -->

@extends('layouts.dashboard')

@section('content')
    <h1>Buat Menu</h1>

    <form action="{{ route('menus.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Add your form fields here -->
        <div class="mb-3">
            <label for="no_menu" class="form-label">No Menu</label>
            <input type="number" class="form-control" id="no_menu" name="no_menu" required>
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Menu</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Harga</label>
            <input type="text" class="form-control" id="price" name="price" required>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Gambar</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>

        <button type="submit" class="btn btn-success">Submit</button>
    </form>
@endsection
