<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class ApiController extends Controller
{
    public function apiCall(Request $request)
    {
        $headers = [
            'Content-Type' => 'application/json',
            'Access-Control-Allow-Origin' => '*',
            'Access-Control-Allow-Methods' => 'GET, POST'
        ];
        $apiClient = new Client(['headers' => $headers]);

        try {
            
            $apiRequest = $apiClient->post('https://us-central1-fortnynja-dev.cloudfunctions.net/fnLooiTechInterview', [
                'json' => [
                    'id' => 'looi_fortnynja_dev',
                    'simple_math' => 6
                ]
            ]);
            $response = json_decode($apiRequest->getBody()->getContents(), true);
            return response($response, 200);

        }
        catch (\Exception $e){
            return response($e, 400);
        }
    }
}
