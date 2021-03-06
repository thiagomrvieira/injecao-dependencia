<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });



// Route::get('/', function () {
//     $httpClient = app('GuzzleHttp\Client'); // ou app()->make('GuzzleHttp\Client').
//     dd($httpClient);
// });



Route::get('/', function () {
    $userDataService = app('App\Contracts\ExternalDataInterface');
    $responseBody = (string) $userDataService->getData('/users')->getBody();
    return response($responseBody, 200, [
        'Content-Type' => 'application/json'
    ]);
});