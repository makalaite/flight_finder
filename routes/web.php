<?php

Route::get('/', ['as' => 'app.search.index', 'uses' => 'SearchFlightsController@index']);
Auth::routes();
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::group(['prefix' => 'airports'], function () {
        Route::get('/', ['as' => 'app.airports.index', 'uses' => 'Ff_Airports_Controller@index']);
        Route::get('/create', ['as' => 'app.airports.create', 'uses' => 'Ff_Airports_Controller@create']);
        Route::post('/create', ['as' => 'app.airports.store', 'uses' => 'Ff_Airports_Controller@store']);
        Route::group(['prefix' => '{id}'], function () {
            Route::get('/edit', ['as' => 'app.airports.edit', 'uses' => 'Ff_Airports_Controller@edit']);
            Route::post('/edit', ['as' => 'app.airports.update', 'uses' => 'Ff_Airports_Controller@update']);
            Route::delete('/', ['as' => 'app.airports.delete', 'uses' => 'Ff_Airports_Controller@destroy']);
            Route::get('/', ['as' => 'app.airports.show', 'uses' => 'Ff_Airports_Controller@show']);
        });
    });
    Route::group(['prefix' => 'airlines'], function () {
        Route::get('/', ['as' => 'app.airlines.index', 'uses' => 'Ff_Airlines_Controller@index']);
        Route::get('/create', ['as' => 'app.airlines.create', 'uses' => 'Ff_Airlines_Controller@create']);
        Route::post('/create', ['as' => 'app.airlines.store', 'uses' => 'Ff_Airlines_Controller@store']);
        Route::group(['prefix' => '{id}'], function () {
            Route::get('/edit', ['as' => 'app.airlines.edit', 'uses' => 'Ff_Airlines_Controller@edit']);
            Route::post('/edit', ['as' => 'app.airlines.update', 'uses' => 'Ff_Airlines_Controller@update']);
            Route::delete('/', ['as' => 'app.airlines.delete', 'uses' => 'Ff_Airlines_Controller@destroy']);
            Route::get('/', ['as' => 'app.airlines.show', 'uses' => 'Ff_Airlines_Controller@show']);
        });
    });
    Route::group(['prefix' => 'flights'], function () {
        Route::get('/', ['as' => 'app.flights.index', 'uses' => 'Ff_Flights_Controller@index']);
        Route::get('/create', ['as' => 'app.flights.create', 'uses' => 'Ff_Flights_Controller@create']);
        Route::post('/create', ['as' => 'app.flights.store', 'uses' => 'Ff_Flights_Controller@store']);
        Route::group(['prefix' => '{id}'], function () {
            Route::get('/edit', ['as' => 'app.flights.edit', 'uses' => 'Ff_Flights_Controller@edit']);
            Route::post('/edit', ['as' => 'app.flights.update', 'uses' => 'Ff_Flights_Controller@update']);
            Route::delete('/', ['as' => 'app.flights.delete', 'uses' => 'Ff_Flights_Controller@destroy']);
            Route::get('/', ['as' => 'app.flights.show', 'uses' => 'Ff_Flights_Controller@show']);
        });
    });
    Route::group(['prefix' => 'countries'], function () {
        Route::get('/', ['as' => 'app.countries.index', 'uses' => 'Ff_Countries_Controller@index']);
        Route::get('/create', ['as' => 'app.countries.create', 'uses' => 'Ff_Countries_Controller@create']);
        Route::post('/create', ['as' => 'app.countries.store', 'uses' => 'Ff_Countries_Controller@store']);
        Route::group(['prefix' => '{id}'], function () {
            Route::get('/edit', ['as' => 'app.countries.edit', 'uses' => 'Ff_Countries_Controller@edit']);
            Route::post('/edit', ['as' => 'app.countries.update', 'uses' => 'Ff_Countries_Controller@update']);
            Route::delete('/', ['as' => 'app.countries.delete', 'uses' => 'Ff_Countries_Controller@destroy']);
            Route::get('/', ['as' => 'app.countries.show', 'uses' => 'Ff_Countries_Controller@show']);
        });
    });
    Route::get('/faker', ['as' => 'app.faker.index', 'uses' => 'FakeDataController@index']);
    Route::get('/fake-flights', ['as' => 'app.flights.faker', 'uses' => 'FakeDataController@flightsIndex']);
    Route::post('/fake-flights', ['as' => 'app.flights.faker', 'uses' => 'FakeDataController@fakeFlights']);
    Route::get('/fake-airports', ['as' => 'app.airports.faker', 'uses' => 'FakeDataController@airportsIndex']);
    Route::post('/fake-airports', ['as' => 'app.airports.faker', 'uses' => 'FakeDataController@fakeAirports']);
});
Route::get('/home', function () {
    return view('home');
});

