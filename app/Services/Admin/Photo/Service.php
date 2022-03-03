<?php


namespace App\Services\Admin\Photo;

use App\Models\Photo;
use Illuminate\Support\Facades\Storage;

class Service
{
    public function store($data)
    {
        $path = 'public/images/'.$data['theme_id'].'/';
        $filename = $data['image']->getClientOriginalName();
        $data['image']->storeAs($path, $filename);

        $insert = [
            'path' => $path . $filename,
            'url' => asset('storage/images/'.$data['theme_id'].'/'.$filename),
            'size' => $data['image']->getSize(),
            'desc' => $data['desc'] ?? '',
            'theme_id' => $data['theme_id'],
        ];
        Photo::create($insert);
    }

    public function update(Photo $client, $data)
    {
        $client->update($data);
    }

    public function delete(Photo $photo)
    {
        if(Storage::exists($photo->path)){
            Storage::delete($photo->path);
        }
        $photo->delete();
    }
}
