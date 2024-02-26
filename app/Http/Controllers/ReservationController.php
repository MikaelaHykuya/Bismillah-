<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::all();
        $reservations = Reservation::latest('created_at')->get();
        return view('reservations.index', compact('reservations'));
    }

    public function store(Request $request)
        {
            // Validasi data yang diterima dari formulir reservasi
            $validatedData = $request->validate([
                'full_name' => 'required',
                'email' => 'required|email',
                'phone_number' => 'required',
                'no_meja' => 'required',
                'number_of_people' => 'required|integer',
                'reservation_date' => 'required|date',
                'message' => 'required',
            ]);
            

            $formattedDate = Carbon::createFromFormat('d/m/Y', $request->input('reservation_date'))->format('Y-m-d');
            Reservation::create([
                'full_name' => $request->input('full_name'),
                'email' => $request->input('email'),
                'phone_number' => $request->input('phone_number'),
                'no_meja' => $request->input('no_meja'),
                'number_of_people' => $request->input('number_of_people'),
                'reservation_date' => $formattedDate,
                'message' => $request->input('message'),
                // tambahkan field lainnya sesuai kebutuhan
            ]);
        return redirect()->route('home')->with('success', 'Reservation successfully created!');
    }

    public function destroy($id)
{
    $reservation = Reservation::findOrFail($id);
    $reservation->delete();

    // Redirect atau tampilkan pesan sukses
    return redirect()->route('reservations.index')->with('success', 'Reservation deleted successfully');
}
}
