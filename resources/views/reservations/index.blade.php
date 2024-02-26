@extends('layouts.dashboard')

@section('content')
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Data Reservasi</h1>
            <a href="{{ route("home") }}" class="btn btn-primary">Buat Reservasi</a>
        </div>

        @if($reservations->isEmpty())
            <p class="text-info">No reservations found.</p>
        @else
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No Handphone</th>
                        <th>Nomor Meja</th>
                        <th>Jumlah Orang</th>
                        <th>Tanggal Reservasi</th>
                        <th>Pesan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($reservations as $reservation)
                        <tr>
                            <td>{{ $reservation->full_name }}</td>
                            <td>{{ $reservation->email }}</td>
                            <td>{{ $reservation->phone_number }}</td>
                            <td>{{ $reservation->no_meja }}</td>
                            <td>{{ $reservation->number_of_people }}</td>
                            <td>{{ $reservation->reservation_date }}</td>
                            <td>{{ $reservation->message }}</td>
                            <td>
                                <form action="{{ route('reservations.destroy', $reservation->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        

        @endif
    </div>
@endsection
