<?php


namespace App\Http\Controllers\Public\Theme;

use App\Http\Controllers\Controller;
use App\Models\Theme;

class ShowController extends Controller
{
    public function __invoke(Theme $theme)
    {
        $themes = Theme::all();
        return view('public.theme.index', compact('themes', 'theme'));
    }
}
