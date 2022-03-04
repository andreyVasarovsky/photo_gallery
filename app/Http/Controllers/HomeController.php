<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Theme;

class HomeController extends Controller
{
    public function __invoke()
    {
        $themes = Theme::all();
        $randomPhotos = Photo::inRandomOrder()->limit(8)->get();
        return view('home', compact('themes', 'randomPhotos'));
    }
}
