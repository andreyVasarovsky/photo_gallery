<?php


namespace App\Http\Controllers\Admin\Visit;

use App\Http\Controllers\Controller;
use App\Models\Visit;

class DestroyController extends Controller
{
    public function __invoke(Visit $visit)
    {
        $visit->delete();
        return redirect(route('admin.visit.index'));
    }
}
