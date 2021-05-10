<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;


class DependenciasController extends Controller
{
    // /dependencias
    public function index(Request $request, Client $client)
    {
        // Send a request to https://foo.com/api/test
        $response = $client->request('GET', 'dependencias',
            [
                'headers' => [
                    'accept'     => 'application/json',
                    'http_errors'=> true
                ]
            ]);
        return response()->json(json_decode($response->getBody()));

    }
    
    // /dependencias/{id}
    public function find(Request $request, $id, Client $client)
    {
        // Send a request to https://foo.com/api/test
        $response = $client->request('GET', 'dependencias/'.$id,
            [
                'headers' => [
                    'accept'     => 'application/json',
                    'http_errors'=> true
                ]
            ]);
        return response()->json(json_decode($response->getBody()));

    }
}