<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Les Bateaux') }}
        </h2>
    </x-slot>



    <div class="p-6 bg-white rounded-lg shadow-md">

        <table class="table table-striped table-hover w-full text-center">
            <thead class="bg-gray-100">
                <tr>
                    <th>Nom</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bateaux as $bateau)
                <tr>
                    <td>{{ $bateau->nom }}</td>
                    <td class="flex justify-center gap-2">
                        <a href="{{ route('bateaus.show', $bateau->id) }}" class="btn btn-primary">Voir</a>
                        <form action="" method="POST" onsubmit="return confirm('Voulez-vous vraiment supprimer ce bateau ?');">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Supprimer</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
