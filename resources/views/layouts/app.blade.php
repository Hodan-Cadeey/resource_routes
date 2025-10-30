<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mijn Laravel Site')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-200">
    <div class="container flex flex-col md:flex-row gap-6 m-4">
        <aside class="bg-gray-500 w-64 text-3xl p-4 rounded shadow sticky top-0 h-screen hidden md:block transition">
            <nav class="text-white flex flex-col space-y-6">
                <a class="hover:underline" href="{{ route('home') }}">Home</a>
                <a class="hover:underline" href="{{ route('employee.index') }}">Werknemers</a>
                <a class="hover:underline" href="{{ route('about') }}">Over ons</a>
            </nav>
        </aside>

        <main class="bg-gray-400 flex-1 p-6 rounded shadow">
            <h2 class="text-3xl font-bold mb-4 text-center text-indigo-900">@yield('page-title', 'Page Title')</h2>
            @yield('content')

        </main>
    </div>

    <footer class="bg-gray-500 text-center p-4 text-white">
        <p>&copy; {{ date('Y') }} - Mijn Laravel Site</p>
    </footer>
</body>
</html>
