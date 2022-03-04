<?php


namespace App\Http\Controllers\Public\Theme;

use App\Http\Controllers\Controller;
use App\Models\Theme;

class IndexController extends Controller
{
    public function __invoke()
    {
        $themes = Theme::all();
        return view('public.theme.index', compact('themes'));
    }
}
