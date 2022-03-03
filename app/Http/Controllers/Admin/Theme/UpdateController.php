<?php


namespace App\Http\Controllers\Admin\Theme;

use App\Http\Controllers\Controller;
use App\Http\Requests\Theme\UpdateRequest;
use App\Models\Theme;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Theme $theme)
    {
        $data = $request->validated();
        $theme->update($data);
        return redirect(route('admin.theme.show', $theme->id));
    }
}
