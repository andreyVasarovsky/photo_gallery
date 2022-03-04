<?php


namespace App\Http\Controllers\Admin\Visit;

use App\Http\Controllers\Controller;
use App\Http\Requests\Visit\UpdateRequest;
use App\Models\Visit;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Visit $visit)
    {
        $data = $request->validated();
        $visit->update($data);
        return redirect(route('admin.visit.show', $visit->id));
    }
}
