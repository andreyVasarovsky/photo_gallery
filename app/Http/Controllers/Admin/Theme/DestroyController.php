<?php


namespace App\Http\Controllers\Admin\Theme;

use App\Http\Controllers\Controller;
use App\Models\Theme;

class DestroyController extends Controller
{
    public function __invoke(Theme $theme)
    {
        $theme->delete();
        return redirect(route('admin.theme.index'));
    }
}
