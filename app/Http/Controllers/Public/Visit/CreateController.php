<?php

namespace App\Http\Controllers\Public\Visit;

use App\Http\Controllers\Controller;
use App\Models\Theme;

class CreateController extends Controller
{
    public function __invoke()
    {
        $themes = Theme::all();
        return view('public.visit.create', compact('themes'));
    }
}
