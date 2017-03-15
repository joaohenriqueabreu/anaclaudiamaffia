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

Route::get('/', ['as' => 'landing.home',  'uses' => "PageController@main"]);

Route::post('/send', ['as' => 'mail.send', 'uses'=>'EmailController@send']);

Route::get('mini/{id}',['as' => 'landing.parts.projeto.mini', 'uses' => 'PageController@mini']);

Route::resource('projetos','ProjetoController');

Route::resource('projetos.images','ProjetoImageController');

//Route::get('compare', ['as' => 'landing.compare', function () {
//    return view('reference.home');
//}]);

Route::get('test', ['as' => 'test.home', function () {
    return view('test.home');
}]);

//Route::get('blog', ['as' => 'blog',  'uses' => "PageController@blog"]);
