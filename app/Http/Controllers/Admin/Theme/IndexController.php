<?php


namespace App\Http\Controllers\Admin\Theme;

use App\Http\Controllers\Controller;
use App\Models\Client;

class IndexController extends Controller
{
    public function __invoke()
    {
        dd('Theme');
        $clients = Client::all();
        return view('admin.client.index', compact('clients'));
    }
}
