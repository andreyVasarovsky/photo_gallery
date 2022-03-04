<?php


namespace App\Http\Controllers\Admin\Photo;


use App\Http\Controllers\Controller;
use App\Services\Admin\Photo\Service;

class BaseController extends Controller
{
    public Service $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

}
