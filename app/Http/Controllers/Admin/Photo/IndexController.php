<?php


namespace App\Http\Controllers\Admin\Photo;

use App\Http\Controllers\Controller;
use App\Models\Client;

class IndexController extends Controller
{
    public function __invoke()
    {
        dd('Photo');
        $clients = Client::all();
        return view('admin.client.index', compact('clients'));
    }
}
