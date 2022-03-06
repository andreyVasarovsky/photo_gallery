<?php


namespace App\Http\Controllers\Admin\Visit;

use App\Http\Requests\Visit\UpdateRequest;
use App\Models\Visit;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Visit $visit)
    {
        $data = $request->validated();
        $this->service->update($visit, $data);
        return redirect(route('admin.visit.show', $visit->id));
    }
}
