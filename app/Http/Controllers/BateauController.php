<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bateaus;
use App\Models\Equipements;
use App\Http\Requests\BateauRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;


class BateauController extends Controller
{
    public function index()
    {
        $bateaux = Bateaus::oldest('nom')->paginate(5);
        return view('dashboard', compact('bateaux'));
    }

    public function show(int $id)
    {
        $bateau = Bateaus::findOrFail($id);
        return view('show', compact('bateaux'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'vitesse' => 'required|integer',
            'image' => 'nullable|image',
            'equipement.*' => 'nullable|string|max:255'
        ]);

        // Image
        if ($request->hasFile('image')) {
            $image = $request->file('image');

            $filename = time() . '_' . $image->getClientOriginalName();

            $image->move(public_path('images/bateaux'), $filename);

            $path = 'images/bateaux/' . $filename;
        } else {
            $path = null;
        }

        // Slug auto
        $slug = Str::slug($request->nom);

        // Création bateau
        $bateau = Bateaus::create([
            'nom' => $request->nom,
            'slug' => $slug,
            'vitesse' => $request->vitesse,
            'image' => $path,
        ]);

        // Création équipements liés
        if ($request->filled('equipement')) {
            foreach ($request->equipement as $libelle) {
                if (!empty($libelle)) {
                    Equipements::create([
                        'libelleequipements' => $libelle,
                        'bateau_id' => $bateau->id,
                    ]);
                }
            }
        }

        return redirect()->route('/dashboard')->with('success', 'Bateau ajouté avec succès');
    }
}

        
    

