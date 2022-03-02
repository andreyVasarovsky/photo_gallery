<?php


namespace App\Http\Controllers\Admin\Client;

use App\Http\Controllers\Controller;

class EditController extends Controller
{
    public function __invoke()
    {
        return view('admin.client.index');
    }
}
