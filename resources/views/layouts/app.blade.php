<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mijn Laravel Site')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
   <div class="container flex gap-6 m-4">
     <aside class="bg-gray-500 w-64 md text-3xl p-4 rounded shadow sticky transition top-0 h-screen ">
        <nav class="text-white flex flex-col space-y-6">
            <a class=" hover:underline" href="{{ route('home') }}">Home</a>
            <a class=" hover:underline href="{{ route('employee')}}">Werknemers</a>
            <a class=" hover:underline href="{{ route('about') }}">Over ons</a>
        </nav>
    </aside>
 
    <main class="bg-gray-400">
        <h2 class="text-3xl font-bold mbt mb-4 text-center text-indigo-900">@yield('page-title', 'Page Title')</h2>
        @yield('content')
    </main>
   </div>

    <footer class="bg-gray-500 text-center ">
        <p>&copy; {{ date('Y') }} - Mijn Laravel Site</p>
    </footer>

</body>
</html>
