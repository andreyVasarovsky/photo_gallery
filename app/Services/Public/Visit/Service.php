<?php

namespace App\Services\Public\Visit;

use App\Mail\Visit\ConfirmationMail;
use App\Models\Client;
use App\Models\Visit;
use Illuminate\Support\Facades\Mail;

class Service
{
    public function store($data)
    {
        $dataToStore = $data;
        if (isset($dataToStore))
            unset($dataToStore['g-recaptcha-response']);

        Visit::firstOrCreate([
            'full_name' => $dataToStore['full_name'],
            'phone' => $dataToStore['phone'],
            'status' => Visit::STATUS_IN_PROGRESS,
        ], $dataToStore);


        Mail::to($dataToStore['email'])->send(new ConfirmationMail($dataToStore));
    }

    public function update(Visit $visit, $data)
    {
        $visit->update($data);
        if (intval($visit->status) === $visit::STATUS_COMPLETED){
            Client::firstOrCreate([
                'full_name' => $visit->full_name,
                'phone' => $visit->phone,
            ], $data);
        }
    }
}
