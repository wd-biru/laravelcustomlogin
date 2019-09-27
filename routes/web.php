<?php
//use Illuminate\Routing\Route;
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
Auth::routes(['verify' => true]);

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', function () {
    return view('home');
});
Route::get('/signin', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});

Route::post('/register_method','RegisterController@store');
Route::post('/login_check','RegisterController@login');
Route::get('/logout',function(){
	Auth::logout();
	return Redirect::to('signin');
});
Route::get('/edit-user/{id}','RegisterController@edituser');
Route::get('/delete-user/{id}','RegisterController@deleteuser');
Route::post('/update','RegisterController@updateuser');