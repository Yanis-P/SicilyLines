<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CarrouselController extends Controller
{
    //
    public function index()
    {
        $images = [
            'images/sicile/img1.jpg',
            'images/sicile/img2.jpg',
            'images/sicile/img3.jpg',
            'images/sicile/img4.jpg',
            'images/sicile/img5.jpg',
            'images/sicile/img6.jpg',
        ];

        return view('welcome', compact('images'));
    }

    public function indexBateaux()
    {
        // Chemin complet vers le dossier public/images/bateaux
        $path = public_path('images/bateaux');

        // Récupère tous les fichiers du dossier
        $images = File::files($path);

        // Transforme les objets en chemins relatifs pour les afficher dans la vue
        $images = array_map(function($file) {
            return 'images/bateaux/' . $file->getFilename();
        }, $images);

        return view('dashboard', compact('images'));
    }
}
