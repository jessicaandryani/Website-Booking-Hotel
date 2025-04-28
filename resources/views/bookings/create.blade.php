@extends('layouts.app')

@section('content')
    <div class="bg-white p-10 rounded-2xl shadow-2xl max-w-3xl mx-auto my-12">
        <h1 class="text-3xl font-bold text-[#003049] mb-8 text-center">Booking Kamar</h1>

        <form action="{{ route('bookings.store') }}" method="POST" class="space-y-6">
            @csrf

            <div>
                <label class="block text-[#003049] font-semibold mb-2">Pilih Kamar</label>
                <select name="room_id" class="w-full border border-gray-300 rounded-xl p-3 focus:outline-none focus:ring-2 focus:ring-[#fcbf49]">
                    @foreach ($rooms as $room)
                        <option value="{{ $room->id }}">{{ $room->hotel->name }} - Kamar {{ $room->room_number }}</option>
                    @endforeach
                </select>
                @error('room_id')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label class="block text-[#003049] font-semibold mb-2">Tanggal Check-In</label>
                <input type="date" name="check_in" class="w-full border border-gray-300 rounded-xl p-3 focus:outline-none focus:ring-2 focus:ring-[#fcbf49]" value="{{ old('check_in') }}">
                @error('check_in')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label class="block text-[#003049] font-semibold mb-2">Tanggal Check-Out</label>
                <input type="date" name="check_out" class="w-full border border-gray-300 rounded-xl p-3 focus:outline-none focus:ring-2 focus:ring-[#fcbf49]" value="{{ old('check_out') }}">
                @error('check_out')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="text-center">
                <button type="submit" class="bg-[#f77f00] text-white font-bold py-3 px-8 rounded-xl hover:bg-[#fcbf49] transition">
                    Booking Sekarang
                </button>
            </div>
        </form>
    </div>
@endsection
