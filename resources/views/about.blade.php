@extends('layouts.app')

@section('content')
<section class="about max-w-4xl mx-auto p-6 bg-gray-50 rounded-lg shadow-md mt-6">
    @section('page-title', 'Welkom op de over ons-pagina')

    <h2 class="text-3xl font-bold text-gray-800 mb-4">Over ons</h2>
    <p class="text-gray-700 mb-6">
        Welkom op de Over ons-pagina! Wij zijn een team van enthousiaste ontwikkelaars
        die met Laravel moderne en gebruiksvriendelijke webapplicaties bouwen.
    </p>

    <h3 class="text-2xl font-semibold text-gray-800 mb-2">Onze missie</h3>
    <p class="text-gray-700 mb-6">
        We willen bedrijven helpen groeien door het bouwen van snelle, veilige
        en schaalbare weboplossingen. Kwaliteit en eenvoud staan bij ons centraal.
    </p>

    <h3 class="text-2xl font-semibold text-gray-800 mb-2">Ons team</h3>
    <ul class="list-disc list-inside text-gray-700 mb-6 space-y-1">
        <li><strong>Emma Jansen</strong> — Back-end developer</li>
        <li><strong>Lars de Vries</strong> — Front-end designer</li>
        <li><strong>Fatima El Amrani</strong> — Projectmanager</li>
    </ul>

    <h3 class="text-2xl font-semibold text-gray-800 mb-2">Contact</h3>
    <p class="text-gray-700">
        Heb je vragen? Neem gerust met ons op!
        {{-- <a href="{{ route('contact') }}" class="text-blue-600 hover:underline">contact</a> --}}
    </p>
</section>
@endsection
