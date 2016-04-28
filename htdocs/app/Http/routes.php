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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/people', 'MainController@people');
Route::get('/ideas', 'MainController@ideas');


Route::get('/seatselection', 'MainController@seatselection');
Route::get('/rideportfolio', 'MainController@rideportfolio');
Route::get('/tracker', 'MainController@tracker');
Route::get('/watsonBanking', 'MainController@watsonBanking');
Route::get('/seatselection_presentation', 'MainController@seatselection_presentation');
Route::get('/OBA_presentation', 'MainController@OBA_presentation');
Route::get('/sensortag_presentation', 'MainController@sensortag_presentation');

Route::post('/submitidea', 'MainController@sendEmail');

Route::get('/downloadBlueAirline', 'MainController@downloadSeatSelectionAndroidAPK');
Route::get('/downloadSeatselctionVR', 'MainController@downloadSeatSelectionVRAPK');
Route::get('/downloadStockApp', 'MainController@downloadPortfolioAndroidAPK');
Route::get('/downloadPortfolioVR', 'MainController@downloadPortfolioVRAPK');
