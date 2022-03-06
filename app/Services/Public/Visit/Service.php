<?php

namespace App\Services\Public\Visit;

use App\Mail\Visit\ConfirmationMail;
use App\Models\Visit;
use Illuminate\Support\Facades\Mail;

class Service
{
    public function store($data){
        $dataToStore = $data;
        if(isset($dataToStore))
            unset($dataToStore['g-recaptcha-response']);

        Visit::firstOrCreate([
            'full_name' => $dataToStore['full_name'],
            'phone' => $dataToStore['phone'],
            'status' => Visit::STATUS_IN_PROGRESS,
        ], $dataToStore);


        Mail::to($dataToStore['email'])->send(new ConfirmationMail($dataToStore));
    }
}
