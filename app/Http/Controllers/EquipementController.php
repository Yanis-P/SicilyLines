<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EquipementController extends Controller
{
    //
    public function show($id)
    {
        $bateau = Bateaus::with('equipements')->findOrFail($id);

        return view('voirBateau', compact('bateau'));
    }
}
