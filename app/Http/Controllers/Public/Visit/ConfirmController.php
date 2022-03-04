<?php

namespace App\Http\Controllers\Public\Visit;

use App\Models\Theme;

class ConfirmController
{
    public function __invoke()
    {
        $themes = Theme::all();
        return view('public.visit.confirm', compact('themes'));
    }
}
