<?php


namespace App\Http\Controllers\Admin\Theme;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('admin.theme.create');
    }
}
