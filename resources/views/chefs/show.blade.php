@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <h2>Chef Details</h2>

        <div class="card mb-3">
            <img src="{{ asset('chef_images/' . $chef->image) }}" class="card-img-top" alt="{{ $chef->name }}">
            <div class="card-body">
                <h5 class="card-title">{{ $chef->name }}</h5>
                <p class="card-text">{{ $chef->specialty }}</p>
                <!-- Tampilkan informasi lainnya sesuai kebutuhan -->
            </div>
        </div>

        <a href="{{ route('chefs.index') }}" class="btn btn-secondary">Back to Chefs</a>
    </div>
@endsection
