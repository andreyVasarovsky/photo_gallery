<?php


namespace App\Http\Controllers\Admin\Theme;

use App\Http\Controllers\Controller;
use App\Models\Theme;

class ShowController extends Controller
{
    public function __invoke(Theme $theme)
    {
        return view('admin.theme.show', compact('theme'));
    }
}
