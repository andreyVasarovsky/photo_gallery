<?php


namespace App\Http\Controllers\Admin\Theme;

use App\Http\Controllers\Controller;
use App\Http\Requests\Theme\StoreRequest;
use App\Models\Theme;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Theme::firstOrCreate($data);
        return redirect(route('admin.theme.index'));
    }
}
