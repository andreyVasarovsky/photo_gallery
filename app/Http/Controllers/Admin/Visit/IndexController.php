<?php


namespace App\Http\Controllers\Admin\Visit;

use App\Http\Controllers\Controller;
use App\Models\Visit;

class IndexController extends Controller
{
    public function __invoke()
    {
        $visits = Visit::all();
        return view('admin.visit.index', compact('visits'));
    }
}
