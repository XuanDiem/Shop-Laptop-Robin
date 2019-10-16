<?php

namespace App\Http\Controllers;

use Facade\FlareClient\Http\Client;
use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public function index()
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'http://api.openweathermap.org/data/2.5/weather?q=hanoi&appid=' . env('OPENT_WEATHER_API_KEY'));
        $json = $response->getBody();
        $data = $json->getContents();
        $weather = json_decode($data);
//        var_dump($weather);
//        return $response()->json($weather);
        return view('weather.index', compact('weather'));
    }
}
