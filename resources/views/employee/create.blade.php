@extends('layouts.app')
{{-- om de layout te laden --}}

@section('page-title', 'Nieuwe werknemer toevoegen')

@section('content')
<div class="p-6 bg-gray-100 min-h-screen">
    <h2 class="text-2xl font-semibold mb-6 text-gray-800">Maak een nieuwe werknemer aan</h2>

    <div class="bg-white p-6 rounded-lg shadow-md max-w-2xl mx-auto">
        <form action="{{ route('employee.store') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label for="first_name" class="block text-gray-700 font-medium mb-1">Voornaam</label>
                <input type="text" name="first_name" id="first_name" 
                       class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300"
                       required>
            </div>

            <div>
                <label for="last_name" class="block text-gray-700 font-medium mb-1">Achternaam</label>
                <input type="text" name="last_name" id="last_name" 
                       class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300"
                       required>
            </div>

            <div>
                <label for="email" class="block text-gray-700 font-medium mb-1">E-mail</label>
                <input type="email" name="email" id="email" 
                       class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300"
                       required>
            </div>

            <div>
                <label for="phone" class="block text-gray-700 font-medium mb-1">Telefoonnummer</label>
                <input type="text" name="phone" id="phone" 
                       class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300"
                       required>
            </div>

            <div>
                <label for="position" class="block text-gray-700 font-medium mb-1">Functie</label>
                <input type="text" name="position" id="position" 
                       class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300"
                       required>
            </div>

            <div>
                <label for="salary" class="block text-gray-700 font-medium mb-1">Salaris (€)</label>
                <input type="number" name="salary" id="salary" step="0.01" 
                       class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300"
                       required>
            </div>

            <div>
                <label for="hire_date" class="block text-gray-700 font-medium mb-1">Datum in dienst</label>
                <input type="date" name="hire_date" id="hire_date" 
                       class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300"
                       required>
            </div>

            <div class="flex items-center justify-between pt-4">
                <a href="{{ route('employee.index') }}" 
                   class="text-gray-600 hover:text-gray-800">← Terug naar overzicht</a>
                
                <button type="submit" 
                        class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition">
                    Opslaan
                </button>
            </div>
        </form>
    </div>

    <p class="mt-6 text-gray-600 text-center">Dit is de werknemers aanmaakpagina van mijn Laravel-project.</p>
</div>
@endsection
