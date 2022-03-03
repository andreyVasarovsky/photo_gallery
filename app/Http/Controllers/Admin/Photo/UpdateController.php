<?php


namespace App\Http\Controllers\Admin\Photo;

use App\Http\Controllers\Admin\Photo\BaseController;
use App\Http\Requests\Photo\UpdateRequest;
use App\Models\Photo;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Photo $photo)
    {
        $data = $request->validated();
        $photo->update($data);
        return redirect(route('admin.photo.show', $photo->id));
    }
}
