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
Route::pattern('id','[0-9]+');
Route::get('/', function () {
    return view('welcome');
 //   return " my name is mohamed";
});

Route::get('/user/{id?}/{username?}', function ($id =null, $username=null) {
   return " my name {id} is mohamed your id is :" .$id ." and username is:" . $username ; 
});
//->where(['id'=>'[0-9]+' , 'username' => '[a-z0-9]+']);

Route::get('/about',function(){
    return view('pages.about');
});

Route::get('/index',function(){
    return view('pages.index');
});

Route::get('/', 'PagesController@index');

Route::get('/service',function(){
    return view('pages.service');
});

Route::get('/app',function(){
return view('layout.app');
});


Route::resource('posts','PostsController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


 

Route::get('create','testController@test');

Route::post('pages/index','PagesController@insert_news');