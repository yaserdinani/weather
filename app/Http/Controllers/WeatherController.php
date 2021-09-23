<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function index(){

        $weather = Http::get('https://api.openweathermap.org/data/2.5/onecall',[
            "lat"=>33.4,
            "lon"=>94.04,
            "exclude"=>"hourly,daily",
            "units"=>"metric",
            "appid"=> "ce3fe3a539c695fdaf885f1d02c9ce7e"
        ]);

        return view('weather.show')
            ->with("weather",$weather->json());
    }
}
