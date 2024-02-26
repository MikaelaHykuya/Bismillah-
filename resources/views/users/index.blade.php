<!-- resources/views/dashboard/users.blade.php -->

@extends('layouts.dashboard')

@section('content')
    <h1>Data Pengguna</h1>

    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                @if (Auth::check() && Auth::user()->role == "Admin")
                <th>Action</th>
                @else
                @endif
                <!-- Tambahkan kolom lain jika diperlukan -->
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    @if (Auth::check() && Auth::user()->role == "Admin")
                    <td> <form action="{{ route('users.destroy', $user->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Hapus</button>
                    </form></td>
                    @else
                    @endif
                    <!-- Tambahkan kolom lain jika diperlukan -->
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
