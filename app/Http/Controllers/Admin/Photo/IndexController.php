<?php


namespace App\Http\Controllers\Admin\Photo;

use App\Http\Controllers\Admin\Photo\BaseController;
use App\Models\Photo;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $photos = Photo::all();
        return view('admin.photo.index', compact('photos'));
    }
}
