<?php


namespace App\Http\Controllers\Admin\Photo;

use App\Http\Controllers\Admin\Photo\BaseController;
use App\Models\Photo;

class DestroyController extends BaseController
{
    public function __invoke(Photo $photo)
    {
        $this->service->delete($photo);
        return redirect(route('admin.photo.index'));
    }
}
