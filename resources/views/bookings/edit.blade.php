@extends('layouts.app')

@section('content')
    <div class="bg-white p-8 rounded-2xl shadow-2xl max-w-4xl mx-auto my-12">
        <h1 class="text-3xl font-bold text-[#003049] mb-8">Edit Booking</h1>

        <form action="{{ route('bookings.update', $booking) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-gray-700 mb-2">Pilih Kamar</label>
                <select name="room_id" class="w-full border rounded-lg p-3">
                    @foreach ($rooms as $room)
                        <option value="{{ $room->id }}" {{ $booking->room_id == $room->id ? 'selected' : '' }}>
                            {{ $room->hotel->name }} - Kamar {{ $room->room_number }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="block text-gray-700 mb-2">Tanggal Check-In</label>
                <input type="date" name="check_in" class="w-full border rounded-lg p-3" value="{{ $booking->check_in }}">
            </div>

            <div>
                <label class="block text-gray-700 mb-2">Tanggal Check-Out</label>
                <input type="date" name="check_out" class="w-full border rounded-lg p-3" value="{{ $booking->check_out }}">
            </div>

            <button type="submit" class="bg-[#f77f00] hover:bg-[#fcbf49] text-white font-bold py-3 px-6 rounded-xl transition">
                Update Booking
            </button>
        </form>
    </div>
@endsection
