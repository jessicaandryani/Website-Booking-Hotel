@extends('layouts.app')

@section('content')
    <!-- Hero / Welcome Section -->
    <section class="bg-green-700 text-white p-10 rounded-lg shadow text-center mb-10" style="background-image: url('/images/gaga.jpg'); background-size: cover; background-position: center;">

        <h1 class="text-5xl font-bold mb-4">Selamat Datang di Hotel Del Luna 🌙</h1>
        <p class="text-black mb-6 max-w-2xl mx-auto">
            Temukan ketenangan jiwa dan keindahan malam di Hotel Del Luna. Tempat di mana impian menjadi kenyataan.
        </p>
        <a href="{{ route('rooms.index') }}" class="inline-block mt-4 px-8 py-3 bg-green-500 text-white rounded-lg hover:bg-green-600 transition">
            Lihat Kamar Tersedia
        </a>
    </section>

    <!-- Fitur Unggulan -->
    <section class="mb-16">
        <h2 class="text-3xl font-bold text-center mb-8 text-black">Fasilitas Unggulan</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow text-center">
                <h3 class="font-semibold text-2xl mb-2 text-green-700">Kamar Mewah</h3>
                <p class="text-green-600">Nikmati kenyamanan kamar eksklusif dengan fasilitas terbaik.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow text-center">
                <h3 class="font-semibold text-2xl mb-2 text-green-700">Layanan 24 Jam</h3>
                <p class="text-green-600">Tim kami siap melayani kebutuhan Anda kapan pun, setiap hari.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow text-center">
                <h3 class="font-semibold text-2xl mb-2 text-green-700">Restoran Elegan</h3>
                <p class="text-green-600">Rasakan hidangan istimewa di restoran kami yang nyaman dan mewah.</p>
            </div>
        </div>
    </section>

    <!-- Tentang Kami -->
    <section class="bg-white p-10 rounded-lg shadow text-center mb-16">
        <h2 class="text-3xl font-bold mb-4 text-black">Tentang Kami</h2>
        <p class="text-green-700 max-w-3xl mx-auto">
            Hotel Del Luna adalah hotel legendaris yang memadukan keanggunan klasik dengan kemewahan modern. Kami berkomitmen untuk memberikan pengalaman menginap yang tak terlupakan untuk setiap tamu.
        </p>
    </section>


    <!-- Footer / Kontak -->
    <footer class="text-center text-green-600 text-sm py-8">
        <p>Hubungi kami: hotel.delluna@example.com | +62 812 3456 7890</p>
        <p>© 2025 Hotel Del Luna. Semua Hak Dilindungi.</p>
    </footer>
@endsection
