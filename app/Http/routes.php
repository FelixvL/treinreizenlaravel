<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
    use App\Client;

Route::get('/', function () {
    return "treinreizen";
});
Route::get('/overviewclients', function(){
    $clients = Client::all();
    return view('overviewclients')->with('clients',$clients);
});

Route::get('/newclient/{clientnr}', 'ClientsController@create');
Route::post('/newclient' , 'ClientsController@postcreate');