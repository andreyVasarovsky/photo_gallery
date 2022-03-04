<?php


namespace App\Http\Controllers\Public\Visit;

use App\Http\Requests\Visit\StoreRequest;
use App\Models\Theme;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $this->service->store($data);
        $themes = Theme::all();
        return view('public.visit.confirm', compact('themes'));
    }
}
