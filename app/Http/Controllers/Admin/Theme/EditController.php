<?php


namespace App\Http\Controllers\Admin\Theme;

use App\Http\Controllers\Controller;
use App\Models\Theme;

class EditController extends Controller
{
    public function __invoke(Theme $theme)
    {
        return view('admin.theme.edit', compact('theme'));
    }
}
