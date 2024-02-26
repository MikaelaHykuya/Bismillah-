@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <h2>Edit Chef</h2>

        <form action="{{ route('chefs.update', $chef->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Chef Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $chef->name }}" required>
            </div>

            <div class="mb-3">
                <label for="specialty" class="form-label">Specialty</label>
                <input type="text" class="form-control" id="specialty" name="specialty" value="{{ $chef->specialty }}" required>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Chef Image</label>
                <input type="file" class="form-control" id="image" name="image">
                <small class="text-muted">Leave empty if you don't want to change the image.</small>
            </div>

            <button type="submit" class="btn btn-primary">Update Chef</button>
        </form>

        <a href="{{ route('chefs.index') }}" class="btn btn-secondary mt-3">Back to Chefs</a>
@endsection
