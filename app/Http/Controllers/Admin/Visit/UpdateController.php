<?php


namespace App\Http\Controllers\Admin\Visit;

use App\Http\Controllers\Controller;
use App\Http\Requests\Client\UpdateRequest;
use App\Models\Client;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Client $client)
    {
        $data = $request->validated();
        $client->update($data);
        return redirect(route('admin.client.show', $client->id));
    }
}
