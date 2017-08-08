<?php

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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {

    Route::group(['prefix' => 'airlines'], function () {
        Route::get('/', ['as' => 'app.airlines.index', 'uses' => 'Ff_AirLines_Controller@index']);
        Route::get('/create', ['as' => 'app.airlines.create', 'uses' => 'Ff_AirLines_Controller@create']);
        Route::post('/create', ['uses' => 'Ff_AirLines_Controller@store']);
        Route::group(['prefix' => '{id}'], function () {
            Route::get('/', ['uses' => 'Ff_AirLines_Controller@show']);
            Route::get('/edit', ['as' => 'app.airlines.edit', 'uses' => 'Ff_AirLines_Controller@edit']);
            Route::post('/edit', ['uses' => 'Ff_AirLines_Controller@update']);
            Route::delete('/delete', ['as' => 'app.airlines.destroy', 'uses' => 'Ff_AirLines_Controller@destroy']);
        });
    });

    Route::group(['prefix' => 'airports'], function () {
        Route::get('/', ['as' => 'app.airports.index', 'uses' => 'Ff_AirPorts_Controller@index']);
        Route::get('/create', ['as' => 'app.airports.create', 'uses' => 'Ff_AirPorts_Controller@create']);
        Route::post('/create', ['uses' => 'Ff_AirPorts_Controller@store']);
        Route::group(['prefix' => '{id}'], function () {
            Route::get('/', ['uses' => 'Ff_AirPorts_Controller@show']);
            Route::get('/edit', ['as' => 'app.airports.edit', 'uses' => 'Ff_AirPorts_Controller@edit']);
            Route::post('/edit', ['uses' => 'Ff_AirPorts_Controller@update']);
            Route::delete('/delete', ['as' => 'app.airports.destroy', 'uses' => 'Ff_AirPorts_Controller@destroy']);
        });
    });

    Route::group(['prefix' => 'flights'], function () {
        Route::get('/', ['as' => 'app.flights.index', 'uses' => 'Ff_Flights_Controller@index']);
        Route::get('/create', ['as' => 'app.flights.create', 'uses' => 'Ff_Flights_Controller@create']);
        Route::post('/create', ['uses' => 'Ff_Flights_Controller@store']);
        Route::group(['prefix' => '{id}'], function () {
            Route::get('/', ['uses' => 'Ff_Flights_Controller@show']);
            Route::get('/edit', ['as' => 'app.flights.edit', 'uses' => 'Ff_Flights_Controller@edit']);
            Route::post('/edit', ['uses' => 'Ff_Flights_Controller@update']);
            Route::delete('/delete', ['as' => 'app.flights.destroy', 'uses' => 'Ff_Flights_Controller@destroy']);
        });
    });

    Route::group(['prefix' => 'countries'], function () {
        Route::get('/', ['as' => 'app.countries.index', 'uses' => 'Ff_Countries_Controller@index']);
        Route::get('/create', ['as' => 'app.countries.create', 'uses' => 'Ff_Countries_Controller@create']);
        Route::post('/create', ['uses' => 'Ff_Countries_Controller@store']);
        Route::group(['prefix' => '{id}'], function () {
            Route::get('/', ['uses' => 'Ff_Countries_Controller@show']);
            Route::get('/edit', ['as' => 'app.countries.edit', 'uses' => 'Ff_Countries_Controller@edit']);
            Route::post('/edit', ['uses' => 'Ff_Countries_Controller@update']);
            Route::delete('/delete', ['as' => 'app.countries.destroy', 'uses' => 'Ff_Countries_Controller@destroy']);
        });
    });
});


