<?php


namespace App\Http\Controllers\Admin\Theme;

use App\Http\Controllers\Controller;
use App\Models\Theme;

class IndexController extends Controller
{
    public function __invoke()
    {
        $themes = Theme::all();
        return view('admin.theme.index', compact('themes'));
    }
}
