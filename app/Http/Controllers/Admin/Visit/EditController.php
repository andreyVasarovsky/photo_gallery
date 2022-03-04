<?php


namespace App\Http\Controllers\Admin\Visit;

use App\Http\Controllers\Controller;
use App\Models\Client;

class EditController extends Controller
{
    public function __invoke(Client $client)
    {
        return view('admin.client.edit', compact('client'));
    }
}
