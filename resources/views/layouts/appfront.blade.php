<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Medicine Info')</title>
    <!-- Load Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body>

    {{-- Include the Fixed Navbar partial --}}
    @include('layouts.partials.header')

    {{-- This is where the specific page content (hero, services, etc.) will be injected --}}
    <main>
        @yield('content')
    </main>


    {{-- Include the Footer partial --}}
    @include('layouts.partials.footer')
    
    
</body>

</html>