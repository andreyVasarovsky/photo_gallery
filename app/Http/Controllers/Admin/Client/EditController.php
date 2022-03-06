<?php


namespace App\Http\Controllers\Admin\Client;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Theme;

class EditController extends Controller
{
    public function __invoke(Client $client)
    {
        $themes = Theme::all();
        $clientThemeIds = array_keys($client->themes()->get()->keyBy('id')->toArray());
        return view('admin.client.edit', compact('client', 'themes', 'clientThemeIds'));
    }
}
