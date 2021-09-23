<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
//Route::view('weather','weather.index');
Route::get('test',function (){
    $weather = Http::get('https://api.openweathermap.org/data/2.5/onecall',[
        "lat"=>33.4,
        "lon"=>94.04,
        "exclude"=>"hourly,daily",
        "units"=>"metric",
        "appid"=> "ce3fe3a539c695fdaf885f1d02c9ce7e"
    ]);
    return $weather->json();
//    return compact($weather);
});
Route::apiResource('weather',\App\Http\Controllers\WeatherController::class);
