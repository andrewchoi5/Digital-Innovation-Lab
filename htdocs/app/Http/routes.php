<?php
Route::get('/', function () {
    return view('welcome');
});
Route::get('/people', 'MainController@people');
Route::get('/ideas', 'MainController@ideas');
Route::get('/groups', 'MainController@groups');
Route::get('/proposals', 'MainController@proposals');
Route::get('/news', 'MainController@news');
Route::get('/iamreal', 'MainController@iamreal');

Route::get('/menuBar', 'MainController@menuBar');
Route::get('/participants', 'MainController@participants');

Route::get('/andrewchoi', 'MainController@andrewchoi');
Route::get('/sonaleeshah', 'MainController@sonaleeshah');
Route::get('/dylantrachsel', 'MainController@dylantrachsel');
Route::get('/chelseathieljones', 'MainController@chelseathieljones');
Route::get('/mahmoodashek', 'MainController@mahmoodashek');//new
Route::get('/mehrannajafi', 'MainController@mehrannajafi');
Route::get('/subashan', 'MainController@subashan');
Route::get('/imadobeid', 'MainController@imadobeid');
Route::get('/radubolboceanu', 'MainController@radubolboceanu');
Route::get('/jeremyleung', 'MainController@jeremyleung');
Route::get('/olivermerk', 'MainController@olivermerk');
Route::get('/davidpark', 'MainController@davidpark');
Route::get('/andrewfrolkin', 'MainController@andrewfrolkin');

Route::get('/seatselection', 'MainController@seatselection');
Route::get('/rideportfolio', 'MainController@rideportfolio');
Route::get('/tracker', 'MainController@tracker');
Route::get('/watsonBanking', 'MainController@watsonBanking');
Route::get('/seatselection_presentation', 'MainController@seatselection_presentation');
Route::get('/OBA_presentation', 'MainController@OBA_presentation');
Route::get('/sensortag_presentation', 'MainController@sensortag_presentation');
Route::get('/odin_presentation', 'MainController@odin_presentation');

Route::post('/submitidea', 'MainController@sendEmail');

Route::get('/downloadBlueAirline', 'MainController@downloadSeatSelectionAndroidAPK');
Route::get('/downloadSeatselctionVR', 'MainController@downloadSeatSelectionVRAPK');
Route::get('/downloadStockApp', 'MainController@downloadPortfolioAndroidAPK');
Route::get('/downloadPortfolioVR', 'MainController@downloadPortfolioVRAPK');
