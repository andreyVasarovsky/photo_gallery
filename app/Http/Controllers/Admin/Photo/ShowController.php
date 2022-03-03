<?php


namespace App\Http\Controllers\Admin\Photo;

use App\Http\Controllers\Admin\Photo\BaseController;
use App\Models\Photo;

class ShowController extends BaseController
{
    public function __invoke(Photo $photo)
    {
        return view('admin.photo.show', compact('photo'));
    }
}
