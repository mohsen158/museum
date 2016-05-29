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


    Route::auth();

});
