<?php

namespace App\Http\Controllers;

use App\Models\Theme;

class HomeController extends Controller
{
    public function __invoke()
    {
        $themes = Theme::all();
        return view('home', compact('themes'));
    }
}
