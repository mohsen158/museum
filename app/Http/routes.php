<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {

    Route::get('/', function () {
        return view('welcome');
    })->middleware('guest');

    Route::get('/tasks', 'TaskController@index');
    Route::post('/task', 'TaskController@store');
    Route::delete('/task/{task}', 'TaskController@destroy');
    Route::get('/addpaint','publicct@addpaintpage');
    Route::post('/addpaint','publicct@addpaint');
    Route::get('/addexhibition','publicct@addexhibitionpage');
    Route::post('/addexhibition','publicct@addexhibition');
    Route::get('/exhibitions','publicct@exhibitions');
    Route::post('exhibitionupdatepage/{exhibition}','publicct@exhibitionupdatepage');

    Route::post('exhibitionupdate/{exhibition}','publicct@exhibitionupdate');
    Route::delete('/exhibitiondel/{exhibition}', 'publicct@exhibitiondel');

    //Amir
    Route::get('/addsculpture','publicct@addsculptpage');
    Route::post('/addsculpture','publicct@addsculp');
    Route::get('/addcalligraphy','publicct@addcalligpage');
    Route::post('/addcalligraphy','publicct@addcallig');
    Route::get('/calligraphies','publicct@calligraphies');
    Route::post('calligraphyupdatepage/{calligraphy}','publicct@calligraphyupdatepage');
    Route::post('calligraphyupdate/{calligraphy}','publicct@calligraphyupdate');
    
    //Route::post('exhibitionupdate/{exhibition}','publicct@exhibitionupdate');
    Route::get('/addartist','publicct@addartistpage');
    Route::post('/addartist','publicct@addartist');
    Route::get('/paints','publicct@paints');
    Route::get('/paintupdate/{paint}','publicct@paintupdatepage');///
    Route::post('/paintupdate/{paint}','publicct@paintupdate');//
    Route::delete('/paintdel/{paint}', 'publicct@paintdel');
    
    //New Amir
    /*Route::get('/addpermcollection','publicct@permanents');
    Route::post('/addpermcolls','publicct@addpermcolls');
    Route::get('/permanentcollections','publicct@permcolls');
    Route::post('/permcollsupdatepage/{permanentcollections}','publicct@updatepermcolls');
    Route::get('/addloan','publicct@loans');
    Route::post('/addloan','publicct@addpermcolls');
    Route::get('/loans','publicct@allloans');
    Route::post('/loansupdatepage/{loan}','publicct@updateloan');
    Route::get('/addartwork','publicct@addartwork');
    Route::post('/addartwork','publicct@addnewartwork');
    Route::get('/artworks','publicct@artworks');
    Route::post('/artworkupdatepage/{Artwok}','publicct@updateartworks');
    */

    Route::get('/addmuseum','publicct@addmuseum');
    Route::post('/addmuseum','publicct@addnewmuseum');
    Route::get('/museums','publicct@museums');
    Route::post('/museumupdatepage/{museum}','publicct@updatemuseum');
    Route::post('museumupdate/{museum}','publicct@museumupdate');
    Route::post('museumdelete/{museum}','publicct@museumdelete');//methode not allowed i dont know why

    Route::get('addArtwork','publicct@addArtworkview');
    Route::post('/addArtwork','publicct@addArtwork');


    //Queries Routes
    Route::post('/exhibnamequer','publicct@getartworkwithExname');
    Route::post('/artistnamequer','publicct@getartworkwithArtistname');
    Route::post('/paintstylequer','publicct@getartworkwithPaintstyle');
    Route::post('/calligstylequer','publicct@getartworkwithCalligstyle');
    Route::post('/sculptsubstquer','publicct@getartworkwithsclupturestyle');
    Route::auth();
    //


});
