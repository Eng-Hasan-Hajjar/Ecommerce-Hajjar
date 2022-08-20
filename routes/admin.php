<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Http\Request;
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
Route::get('/admin/login', function () {
    return view('admin.auth.login');
}); 
Route::post('/admin/login' ,'LoginController@login') -> name('admin.login');




Route::get('/', function () {

    return view('welcome');
});
Route::get('/admin', function () {

    return view('layouts.admin');
});
Route::get('/admin/dashboard', function () {

    return view('admin.dashboard');
});


























Route::group(['namespace'=>'Admin','middleware' => 'auth:admin'], function() {
    Route::get('/', 'DashboardController@index') -> name('admin.dashboard');

########################### Begin Languages Route ########################

Route::group(['namespace'=> 'languages'],function(){
            Route::get('/','LangaugesController@index')->name(admin.langauges);
});

########################### End Languages Route ########################

});



Route::group(['namespace'=>'Admin','middleware' => 'guest:admin'], function(){
     Route::get('login' ,'LoginController@getLogin')-> name('get.admin.login');
     Route::post('login' ,'LoginController@login') -> name('admin.login');
});
//Route::get('login' ,'LoginController@getLogin')-> name('get.admin.login');

