@extends('layouts.app')

@section('content')
    <div class="bg-white p-8 rounded-2xl shadow-2xl max-w-6xl mx-auto my-12">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold text-[#003049]">Booking Saya</h1>
            <a href="{{ route('bookings.create') }}" class="bg-[#f77f00] text-white px-6 py-3 rounded-xl hover:bg-[#fcbf49] transition">
                Booking Kamar
            </a>
        </div>

        @if (session('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded-lg mb-6">
                {{ session('success') }}
            </div>
        @endif

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            @foreach ($bookings as $booking)
                <div class="bg-gray-50 p-6 rounded-2xl shadow hover:shadow-lg transition-all">
                    <div class="space-y-2">
                        <p><span class="font-semibold text-[#003049]">Hotel:</span> {{ $booking->room->hotel->name }}</p>
                        <p><span class="font-semibold text-[#003049]">Kamar:</span> {{ $booking->room->room_number }}</p>
                        <p><span class="font-semibold text-[#003049]">Check-in:</span> {{ \Carbon\Carbon::parse($booking->check_in)->format('d M Y') }}</p>
                        <p><span class="font-semibold text-[#003049]">Check-out:</span> {{ \Carbon\Carbon::parse($booking->check_out)->format('d M Y') }}</p>
                    </div>

                    <div class="flex space-x-4 mt-6">
                        <a href="{{ route('bookings.edit', $booking) }}" 
                           class="bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-2 px-4 rounded-lg transition">
                            Edit
                        </a>

                        <form action="{{ route('bookings.destroy', $booking) }}" method="POST" onsubmit="return confirm('Apakah kamu yakin ingin menghapus?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded-lg transition">
                                Hapus
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
