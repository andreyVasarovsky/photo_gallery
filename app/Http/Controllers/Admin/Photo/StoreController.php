<?php


namespace App\Http\Controllers\Admin\Photo;

use App\Http\Controllers\Admin\Photo\BaseController;
use App\Http\Requests\Photo\StoreRequest;
use App\Models\Photo;


class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $this->service->store($data);
        return redirect(route('admin.photo.index'));
    }
}
