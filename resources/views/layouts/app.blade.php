<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Del Luna</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-[#eae2b7] text-gray-800 min-h-screen flex flex-col">

    <!-- Navbar -->
    <nav class="bg-[#fffbea] p-4 shadow mb-6 sticky top-0 z-50">

        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="font-bold text-lg text-[#003049] hover:text-[#d62828] transition">
                Hotel Del Luna
            </a>
            <div class="space-x-6">
                <a href="{{ route('hotels.index') }}" class="text-[#003049] hover:text-[#d62828] transition">
                    Hotels
                </a>
                <a href="{{ route('rooms.index') }}" class="text-[#003049] hover:text-[#d62828] transition">
                    Rooms
                </a>
                <a href="{{ route('bookings.index') }}" class="text-[#003049] hover:text-[#d62828] transition">
                    Bookings
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container mx-auto flex-1 pb-10">
        <x-alert />
        @yield('content')
    </main>

</body>
</html>
