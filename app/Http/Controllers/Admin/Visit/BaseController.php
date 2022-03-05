<?php

namespace App\Http\Controllers\Admin\Visit;

use App\Http\Controllers\Controller;
use App\Services\Public\Visit\Service;

class BaseController extends Controller
{
    public Service $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }
}
