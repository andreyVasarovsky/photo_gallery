<?php


namespace App\Http\Controllers\Admin\Theme;

use App\Http\Controllers\Admin\Theme\BaseController;
use App\Models\Theme;
use Illuminate\Support\Facades\Redirect;

class DestroyController extends BaseController
{
    public function __invoke(Theme $theme)
    {
        $response = $this->service->delete($theme);
        if (!$response['status']){
            return Redirect::back()->withErrors([$response['msg']]);
        }
        return redirect(route('admin.theme.index'));
    }
}
