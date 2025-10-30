@extends('layouts.app')
{{-- om de layout te laden --}}
@section('content')

    <div class="p-6 bg-gray-100 min-h-screen">
    @section('page-title', 'Welkom op de werknemerspagina')

    <h2 class="text-2xl font-semibold mb-4 text-gray-800">Lijst van werknemers</h2>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200 shadow-md rounded-lg overflow-hidden">
            <thead class="bg-gray-200">
                <tr>
                    <th class="py-2 px-4 text-left text-gray-700 font-medium">Voornaam</th>
                    <th class="py-2 px-4 text-left text-gray-700 font-medium">Achternaam</th>
                    <th class="py-2 px-4 text-left text-gray-700 font-medium">E-mail</th>
                    <th class="py-2 px-4 text-left text-gray-700 font-medium">Phone</th>
                    <th class="py-2 px-4 text-left text-gray-700 font-medium">Position</th>
                    <th class="py-2 px-4 text-left text-gray-700 font-medium">Salary</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($werknemers as $item)
                    <tr class="border-t border-gray-200 hover:bg-gray-50">
                        <td class="py-2 px-4">{{ $item->first_name }}</td>
                        <td class="py-2 px-4">{{ $item->last_name }}</td>
                        <td class="py-2 px-4">{{ $item->email }}</td>
                        <td class="py-2 px-4">{{ $item->phone }}</td>
                        <td class="py-2 px-4">{{ $item->position }}</td>
                        <td class="py-2 px-4">€{{ number_format($item->salary, 2, ',', '.') }}</td>
                        <td class="py-2 px-4 text-left text-gray-700 font-medium"><a
                                href="{{ route('employee.edit', $item->id) }}">Edit</a></td>
                        <td>
                            {{-- <form action="{{ route('employee.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    onclick="return confirm('Weet je het zeker?')">Verwijderen</button>
                            </form> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="m-4">
            <a href="{{ route('employee.create') }}"
                class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition">Voeg medewerkers
                toe.</a>
        </div>
    </div>

    <p class="mt-4 text-gray-600">Dit is de werknemerspagina van mijn Laravel-project.</p>
</div>
@endsection
