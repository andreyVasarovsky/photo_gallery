<?php


namespace App\Http\Controllers\Admin\Visit;

use App\Http\Controllers\Controller;
use App\Models\Visit;

class ShowController extends Controller
{
    public function __invoke(Visit $visit)
    {
        return view('admin.visit.show', compact('visit'));
    }
}
