@extends('layouts.app')
{{-- om de layout te laden --}}

@section('page-title', 'Nieuwe werknemer toevoegen')

@section('content')
    <div class="p-6 bg-gray-100 min-h-screen">
        <h2>Werknemer bewerken: {{ $employee->first_name }} {{ $employee->last_name }}</h2>

        <form action="{{ route('employee.update', $employee->id) }}" method="POST">
            @csrf
            @method('PUT')

            <table cellpadding="8">
                <tr>
                    <td><label for="first_name">Voornaam:</label></td>
                    <td>
                        <input type="text" name="first_name" id="first_name"
                            value="{{ old('first_name', $employee->first_name) }}" required>
                    </td>
                </tr>

                <tr>
                    <td><label for="last_name">Achternaam:</label></td>
                    <td>
                        <input type="text" name="last_name" id="last_name"
                            value="{{ old('last_name', $employee->last_name) }}" required>
                    </td>
                </tr>

                <tr>
                    <td><label for="email">E-mail:</label></td>
                    <td>
                        <input type="email" name="email" id="email" value="{{ old('email', $employee->email) }}"
                            required>
                    </td>
                </tr>

                <tr>
                    <td><label for="phone">Telefoonnummer:</label></td>
                    <td>
                        <input type="text" name="phone" id="phone" value="{{ old('phone', $employee->phone) }}"
                            required>
                    </td>
                </tr>

                <tr>
                    <td><label for="position">Functie:</label></td>
                    <td>
                        <input type="text" name="position" id="position"
                            value="{{ old('position', $employee->position) }}" required>
                    </td>
                </tr>

                <tr>
                    <td><label for="salary">Salaris (€):</label></td>
                    <td>
                        <input type="number" name="salary" id="salary" step="0.01"
                            value="{{ old('salary', $employee->salary) }}" required>
                    </td>
                </tr>

                <tr>
                    <td><label for="hire_date">Datum in dienst:</label></td>
                    <td>
                        <input type="date" name="hire_date" id="hire_date"
                            value="{{ old('hire_date', $employee->hire_date) }}" required>
                    </td>
                </tr>
            </table>

            <br>

            <a href="{{ route('employee.index') }}">← Terug naar overzicht</a>
            <button type="submit">Wijzigingen opslaan</button>
        </form>

        <p class="mt-6 text-gray-600 text-center">Dit is de werknemers Wijzigingen pagina van mijn Laravel-project.</p>
    </div>
@endsection
