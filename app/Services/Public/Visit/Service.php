<?php

namespace App\Services\Public\Visit;

use App\Models\Visit;

class Service
{
    public function store($data){
        Visit::firstOrCreate([
            'full_name' => $data['full_name'],
            'phone' => $data['phone'],
        ], $data);
    }
}
