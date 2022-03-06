<?php


namespace App\Http\Controllers\Admin\Client;

use App\Http\Controllers\Controller;
use App\Models\Theme;

class CreateController extends Controller
{
    public function __invoke()
    {
        $themes = Theme::all();
        return view('admin.client.create', compact('themes'));
    }
}
