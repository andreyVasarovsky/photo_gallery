<?php


namespace App\Http\Controllers\Admin\Photo;

use App\Http\Controllers\Admin\Photo\BaseController;
use App\Models\Photo;
use App\Models\Theme;

class EditController extends BaseController
{
    public function __invoke(Photo $photo)
    {
        $themes = Theme::all();
        return view('admin.photo.edit', compact('photo', 'themes'));
    }
}
