<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'Web\HomeController@index');

/*Route::get('/', function () {
    return view('web.app');
});*/

Route::get('/login', function () {
    return view('web.appaa');
});

Route::get('/admin', function () {
    return view('admin.admin');
});


// Templates
Route::group(array('prefix'=>'/templates/'),function(){
    Route::get('{template}', array( function($template)
    {
        $template = str_replace(".html","",$template);
        View::addExtension('html','php');
        return View::make('templates.'.$template);
    }));
});

Auth::routes();

Route::get('/home', 'HomeController@index');

//Route::get('/redirect', 'SocialAuthController@redirect');
//Route::get('/callback', 'SocialAuthController@callback');
