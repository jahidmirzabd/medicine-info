<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Medicine-Info') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <!-- Hide modal -->
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="font-sans antialiased">
    <div class="min-h-screen flex bg-gray-100 dark:bg-gray-900">
        <!-- Sidebar (vertical, wider) -->
        <aside class="w-70 bg-white dark:bg-gray-800 border-r border-gray-200 dark:border-gray-700 h-screen sticky top-0">
            @include('layouts.sidebar')
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6">
            {{ $slot }}
        </main>
    </div>
</body>
</html>
