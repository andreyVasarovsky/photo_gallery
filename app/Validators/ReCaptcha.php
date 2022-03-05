<?php

namespace App\Validators;

use GuzzleHttp\Client;

class ReCaptcha
{
    const GOOGLE_API_URL = 'https://www.google.com/recaptcha/api/siteverify';

    public function validate($attribute, $value, $parameters, $validator)
    {
        $client = new Client;
        $response = $client->post(
            self::GOOGLE_API_URL,
            [
                'form_params' =>
                    [
                        'secret' => config('services.recaptcha.secret'),
                        'response' => $value
                    ]
            ]
        );
        $body = json_decode((string)$response->getBody());
        return $body->success;
    }
}
