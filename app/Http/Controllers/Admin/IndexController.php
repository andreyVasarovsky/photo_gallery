<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Photo;
use App\Models\Theme;

class IndexController extends Controller
{
    public function __invoke()
    {
        $clients = Client::all();
        $photos = Photo::all();
        $themes = Theme::all();
        return view('admin.index', compact(['clients', 'photos', 'themes']));
    }
}
