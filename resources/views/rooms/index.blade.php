@extends('layouts.app')

@section('content')
    <section >
        <div class="bg-green-700 rounded-3xl w-full p-8 max-w-7xl mx-auto shadow-2xl">
            <h1 class="text-4xl font-bold text-center text-white mb-12">Daftar Kamar Kami</h1>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                @foreach ($rooms as $room)
                    <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all">
                        <div class="overflow-hidden">
                            <!-- Gambar lokal -->
                            <img src="{{ asset('images/standard.jpg') }}" alt="Foto Kamar"
                                class="w-full h-56 object-cover hover:scale-105 transition-transform duration-300">
                        </div>
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-4">
                                <h2 class="text-xl font-bold text-[#003049]">Kamar {{ $room->room_number }}</h2>
                                <!-- Badge Tipe Kamar -->
                                <span class="px-3 py-1 bg-[#fcbf49] text-[#003049] text-xs font-semibold rounded-full">
                                    {{ ucfirst($room->type) }}
                                </span>
                            </div>

                            <p class="text-[#d62828] font-bold text-lg mb-2">Rp {{ number_format($room->price, 0, ',', '.') }}</p>
                            <p class="text-gray-600 text-sm mb-6">Hotel: {{ $room->hotel->name }}</p>

                            <a href="{{ route('rooms.show', $room->id) }}" class="block text-center bg-[#fcbf49] text-[#003049] font-bold py-2 px-4 rounded-xl hover:bg-[#f77f00] transition">
                                Lihat Detail
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <footer class="text-center text-green-600 text-sm py-8">
        <p>Hubungi kami: hotel.delluna@example.com | +62 812 3456 7890</p>
        <p>© 2025 Hotel Del Luna. Semua Hak Dilindungi.</p>
    </footer>
@endsection
