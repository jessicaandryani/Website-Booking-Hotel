<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Room;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::with('room.hotel')->where('user_id', 1)->get();
        return view('bookings.index', compact('bookings'));
    }

    public function create()
    {
        $rooms = Room::with('hotel')->get();
        return view('bookings.create', compact('rooms'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'room_id' => 'required|exists:rooms,id',
            'check_in' => 'required|date|after_or_equal:today',
            'check_out' => 'required|date|after:check_in',
        ]);

        Booking::create([
            'user_id' => 1, // masih hardcode user 1
            'room_id' => $request->room_id,
            'check_in' => $request->check_in,
            'check_out' => $request->check_out,
        ]);

        return redirect()->route('bookings.index')->with('success', 'Booking berhasil dibuat!');
    }

    public function edit(Booking $booking)
    {
        if ($booking->user_id !== 1) {
            abort(403);
        }

        $rooms = Room::with('hotel')->get();
        return view('bookings.edit', compact('booking', 'rooms'));
    }

    public function update(Request $request, Booking $booking)
    {
        if ($booking->user_id !== 1) {
            abort(403);
        }

        $request->validate([
            'room_id' => 'required|exists:rooms,id',
            'check_in' => 'required|date|after_or_equal:today',
            'check_out' => 'required|date|after:check_in',
        ]);

        $booking->update([
            'room_id' => $request->room_id,
            'check_in' => $request->check_in,
            'check_out' => $request->check_out,
        ]);

        return redirect()->route('bookings.index')->with('success', 'Booking berhasil diupdate!');
    }

    public function destroy(Booking $booking)
    {
        if ($booking->user_id !== 1) {
            abort(403);
        }

        $booking->delete();
        return redirect()->route('bookings.index')->with('success', 'Booking berhasil dihapus!');
    }
}
