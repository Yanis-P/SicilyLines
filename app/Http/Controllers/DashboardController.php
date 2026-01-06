<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BateauController;
use App\Http\Controllers\CarrouselController;

class DashboardController extends Controller
{
    public function index()
    {
        $bateaux = (new BateauController)->index(); // récupère les données des bateaux
        $images = (new CarrouselController)->indexBateaux(); // récupère les images

        return view('dashboard', compact('bateaux', 'images'));
    }
}

