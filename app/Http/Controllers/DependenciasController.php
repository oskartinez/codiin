<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;



class Dependencia {
    public $id;
    public $nombre;
   }

class DependenciasController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {

        

        // Create a client with a base URI
        $client = new Client([
            'base_uri' => 'http://localhost:8080/',
            'timeout'  => 5.0,
            'proxy' => ''
            ]);
        // Send a request to https://foo.com/api/test
        $response = $client->request('GET', 'dependencias',
            [
                'headers' => [
                    'Accept'     => 'application/json',
                'http_errors'=> true
                ]
            ]);

        return response()->json(json_decode($response->getBody()));

        


// $response = $client->request('GET', "http://localhost:8080/dependencias");

//         $data = json_decode($response->getBody());


//         dd($data);

        //return $data;

    }
}