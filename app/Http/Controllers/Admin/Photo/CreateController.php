<?php


namespace App\Http\Controllers\Admin\Photo;

use App\Http\Controllers\Admin\Photo\BaseController;
use App\Models\Theme;

class CreateController extends BaseController
{
    public function __invoke()
    {
        $themes = Theme::all();
        return view('admin.photo.create', compact('themes'));
    }
}
