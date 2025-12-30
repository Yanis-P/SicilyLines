<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
