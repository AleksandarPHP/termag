<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\JsonResponse ;

class WatherForecast
{
    protected $apiKey;
    protected $baseUri = 'https://api.weatherapi.com/v1/forecast.json';

    public function __construct()
    {
        $this->apiKey = env('API_KEY');
    }

    public function getResults()  
    {
        $response = Http::get($this->baseUri, [
            'key' => $this->apiKey,
            'q' => 'Jahorina',
            'days' => '5',
            'aqi' => 'no',
            'alerts' => 'no',
        ]);
        
        if ($response->successful()) {
            return $response->json();
        } else {
            return null;
        }

    }

}