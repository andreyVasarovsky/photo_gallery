<?php


namespace App\Services\Admin\Client;

use App\Models\Client;

class Service
{
    public function store($data)
    {
        $themeIds = isset($data['theme_ids']) ? $data['theme_ids'] : [];
        unset($data['theme_ids']);
        $client = Client::firstOrCreate(['phone' => $data['phone']], $data);
        $client->themes()->attach($themeIds);
    }

    public function update(Client $client, $data)
    {
        $themeIds = isset($data['theme_ids']) ? $data['theme_ids'] : [];
        unset($data['theme_ids']);
        $client->update($data);
        $client->themes()->sync($themeIds);
    }
}
