<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Ajouter un bateau') }}
        </h2>
    </x-slot>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .card-custom {
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            background: white;
        }

        .image-preview {
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }
    </style>

    <div class="container my-5">
        <form action="{{ route('bateaus.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row justify-content-center align-items-start g-5">

                {{-- Colonne formulaire --}}
                <div class="col-md-4">
                    <div class="card card-custom p-4">
                        <h5 class="text-center mb-3">Dimensions</h5>

                        <div class="mb-3">
                            <label class="form-label">Nom</label>
                            <input type="text" name="nom" class="form-control" placeholder="Ex : Toto" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Longueur</label>
                            <input type="number" step="0.1" name="longueur" class="form-control" placeholder="Ex : 30" required>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Largeur</label>
                            <input type="number" step="0.1" name="largeur" class="form-control" placeholder="Ex : 8" required>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Vitesse en noeuds</label>
                            <input type="number" step="0.1" name="vitesse" class="form-control" placeholder="Ex : 15" required>
                        </div>                        

                        <h5 class="text-center mb-3">Ajout équipement</h5>

                        
                        <div class="mb-3">
                            <input type="text" name="equipement[]" class="form-control" placeholder="Radar, GPS...">
                        </div>

                    </div>
                </div>

                {{-- Colonne image + bouton --}}
                <div class="col-md-6 text-center">

                    <div class="image-preview mb-3">
                        <img src="" class="img-fluid" alt="Bateau">
                    </div>

                    <div class="mb-3">
                        <input type="file" name="image" class="form-control" accept="image/*" required>
                    </div>

                    <button type="submit" class="btn btn-primary px-5">Créer</button>

                </div>

            </div>
        </form>
    </div>
</x-app-layout>
