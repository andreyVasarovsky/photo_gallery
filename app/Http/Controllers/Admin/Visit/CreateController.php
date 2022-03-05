<?php

namespace App\Http\Controllers\Admin\Visit;

use App\Http\Controllers\Controller;
use App\Models\Visit;

class CreateController extends Controller
{
    public function __invoke()
    {
        $statuses = Visit::STATUSES;
        return view('admin.visit.create', compact('statuses'));
    }
}
