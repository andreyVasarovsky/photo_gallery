<?php


namespace App\Http\Controllers\Admin\Client;

use App\Http\Controllers\Controller;
use App\Models\Client;

class DestroyController extends Controller
{
    public function __invoke(Client $client)
    {
        $client->delete();
        return redirect(route('admin.client.index'));
    }
}
