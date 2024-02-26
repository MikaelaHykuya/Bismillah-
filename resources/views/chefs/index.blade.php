@extends('layouts.dashboard')

@section('title', 'Chefs')

@section('content')
<div class="card">
    @if (session('success'))
    <div class="alert alert-success mt-3">
        {{ session('success') }}
    </div>
@endif
    <div class="card-header bg-primary text-white">
        <h1 class="card-title">Chef</h1>
    </div>

    <div class="card-body">
    <table class="table">
        <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Specialty</th>
            </tr>
        </thead>
        <tbody>
            @foreach($chefs as $chef)
                <tr>
                    <td><img src="{{ asset('chef_images/' . $chef->image) }}" alt="{{ $chef->name }}" style="max-width: 100px;"></td>
                    <td>{{ $chef->name }}</td>
                    <td>{{ $chef->specialty }}</td>
                    <td>
                        <a href="{{ route('chefs.edit', $chef->id) }}" class="btn btn-warning">Edit</a>
                        <a href="{{ route('chefs.show', $chef->id) }}" class="btn btn-warning">View</a>
                        <form action="{{ route('chefs.destroy', $chef->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            <div class="d-flex justify-content-between align-items-center mt-3">
                <a href="{{ route('chefs.create') }}" class="btn btn-success">Tambah Chef</a>
            </div>
        </tbody>
    </table>
@endsection
