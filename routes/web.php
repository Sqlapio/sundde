<?php

use Illuminate\Support\Facades\Route;
use Jenssegers\Agent\Facades\Agent;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    $browser = Agent::browser();
    $browserVersion = Agent::version($browser);
    $platform = Agent::platform();
    $platformVersion = Agent::version($platform);
    $device = Agent::device();
    dd($browser, $device, $browserVersion, $platform);

});
