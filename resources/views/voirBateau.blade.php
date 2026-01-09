<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight text-center">
            {{ $bateau->nom }}
        </h2>
    </x-slot>

    {{-- Image du bateau --}}
    <div class="flex justify-center mt-6">
        <img src="{{ asset($bateau->image) }}"
             alt="Photo du bateau"
             class="rounded-xl shadow-lg w-2/3 max-h-[400px] object-cover">
    </div>

    {{-- Carte infos --}}
    <div class="flex justify-center mt-8">
        <div class="bg-white shadow-xl rounded-xl p-8 w-2/3 grid grid-cols-2 gap-8">

            {{-- Colonne gauche --}}
            <div class="space-y-3 text-gray-700">
                <p><strong>Longueur :</strong> {{ $bateau->longueur }} m</p>
                <p><strong>Largeur :</strong> {{ $bateau->largeur }} m</p>
                <p><strong>Vitesse :</strong> {{ $bateau->vitesse }} nœuds</p>
            </div>

            {{-- Colonne droite --}}
            <div>
                <p class="font-semibold mb-2 text-gray-700">Liste d’équipements :</p>
                <ul class="list-disc list-inside text-gray-600 space-y-1">
                    @forelse($bateau->equipements as $equipement)
                        <li>{{ $equipement->libelleequipements }}</li>
                    @empty
                        <li class="italic text-gray-400">Aucun équipement renseigné</li>
                    @endforelse
                </ul>
            </div>

        </div>
    </div>

    {{-- Bouton retour --}}
    <div class="flex justify-center mt-6">
        <a href="{{ url()->previous() }}"
           class="px-6 py-2 bg-blue-500 text-white rounded-lg shadow hover:bg-blue-600 transition">
            Retour
        </a>
    </div>

</x-app-layout>
