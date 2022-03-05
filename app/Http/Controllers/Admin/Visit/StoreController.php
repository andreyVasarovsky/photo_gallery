<?php


namespace App\Http\Controllers\Admin\Visit;

use App\Http\Requests\Visit\Admin\StoreRequest;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $this->service->store($data);
        return redirect(route('admin.visit.index'));
    }
}
