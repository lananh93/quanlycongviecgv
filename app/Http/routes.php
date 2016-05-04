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

Route::group(['middleware' => ['web']], function () {

    Route::get('/', function () {

        return view('welcome');
    });

    Route::group(['namespace' => 'Backend', 'middleware' => 'guest'], function () {
        Route::get('/login', ['as' => 'login', 'uses' => function () {
            return view('layout.frontend.login');
        }]);

        Route::post('/login', 'UserController@login');

        Route::get('/signup', ['as' => 'signup', 'uses' => function () {
            return view('layout.frontend.signup');
        }]);

        Route::post('/signup', 'UserController@signup');

        Route::get('/activation/{user_id}/{code}', ['as' => 'activation', 'uses' => 'UserController@activation']);
    });

    Route::get('/logout', ['as' => 'logout', 'uses' => function () {
        $user = Sentinel::getUser();
        Sentinel::logout($user);
        return Redirect::back();
    }]);

    Route::group(['as' => 'admin::', 'namespace' => 'Backend', 'prefix' => 'admin', 'middleware' => 'admin'], function () {
        Route::get('/', ['as' => 'dashboard', 'uses' => 'AdminController@index']);

        Route::group(['as' => 'user::', 'prefix' => 'user'], function () {
            Route::get('/', ['as' => 'dashboard', 'uses' => 'AdminController@index']);

            Route::get('/', ['as' => 'index', 'uses' => 'UserController@index']);
            Route::get('/role/{role}', ['as' => 'role', 'uses' => 'UserController@index']);
            Route::get('/add', ['as' => 'add', 'uses' => 'UserController@add']);
            Route::get('/edit/{userID}', ['as' => 'edit', 'uses' => 'UserController@add']);
            Route::get('/save/{userID?}', ['as' => 'save', 'uses' => 'UserController@save']);
            Route::get('/delete/{userID}', ['as' => 'delete', 'uses' => 'UserController@delete']);
            Route::get('/{userID}', ['as' => 'view', 'uses' => 'UserController@view']);
            Route::get('/addrule',['as' => 'addrule', 'uses' => 'AdminController@addrule']);

        });

        Route::group(['as' => 'media::', 'prefix' => 'media'], function() {
            Route::get('/', ['as' => 'index', 'uses' => 'MediaController@index']);
        });

    });

    Route::group(['as' => 'work::','prefix' => 'work'], function() {
        Route::get('/', ['as' => 'addlec', 'uses' => 'WorkController@getAdd']);

        Route::post('/post', ['as' => 'postaddlec', 'uses' => 'WorkController@postAdd']);
        Route::get('/list',['as' => 'getlist', 'uses' => 'WorkController@getlist']);
        });


});

/*Route :: get('schema/create', function(){
    Schema::create('admin', function($table){
        $table->increments('id');
        $table->string('username');
        $table->string('password');
    }) ;

});

Route :: get('schema/drop', function(){
    Schema::dropIfExists('admin');

});

Route::get('form/layout', function(){
    return view('form.layout');
});
Route::get('test', function(){
    return view('layout.backend.lecturer.work.addlec');
});

*/

