<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Ajouter un bateau') }}
        </h2>
    </x-slot>

    
        <div class="container my-5">
                <div class="row g-4">
                    

                    <form action="" method="POST" enctype="multipart/form-data" class="">
                        @csrf

                        <div class="col-md-4">
                            <div class="card p-4 shadow">
                                <h4 class="mb-3">Dimensions</h4>

                                <div class="mb-3">
                                    <label class="form-label">Longueur</label>
                                    <input type="number" class="form-control" name="length">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Largeur</label>
                                    <input type="number" class="form-control" name="width">
                                </div>

                                <h4 class="mt-4 mb-3">Ajout équipement</h4>

                                <input type="text" class="form-control mb-2">
                                <button class="btn btn-primary w-100">Ajouter</button>

                                <div class="mb-3">
                                    <label for="image" class="form-label">Télécharger la photo</label>
                                    <input type="file" class="form-control" id="image" name="image">
                                </div>
                            </div>
                        </div>


                        <button type="submit" class="btn btn-primary">Ajouter</button>
                    </form>
                </div>

        </div>
    </div>
</x-app-layout>

