<?php

namespace App\Services;

use Illuminate\Support\Arr;
use GuzzleHttp\ClientInterface;
use Laravel\Socialite\Two\FacebookProvider;

class CustomFacebookProvider extends FacebookProvider
{

    protected function getUserByToken($token)
    {
        $meUrl = $this->graphUrl.'/'.$this->version.'/me?access_token='.$token.'&fields='.implode(',', $this->fields);

        $response = $this->getHttpClient()->get($meUrl, [
            'headers' => [
                'Accept' => 'application/json',
            ],
        ]);

        return json_decode($response->getBody(), true);
    }

}
