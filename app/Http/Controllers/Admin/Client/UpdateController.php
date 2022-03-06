<?php


namespace App\Http\Controllers\Admin\Client;

use App\Http\Controllers\Admin\Client\BaseController;
use App\Http\Requests\Client\UpdateRequest;
use App\Models\Client;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Client $client)
    {
        $data = $request->validated();
        $this->service->update($client, $data);
        return redirect(route('admin.client.show', $client->id));
    }
}
