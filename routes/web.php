<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/frontend', function () {
    return view('frontend');
});*/

Auth::routes();

Route::get('/frontend','FrontEndController@frontend');
Route::get('/aboutus','AboutUsController@aboutus');
Route::get('/register','RegisterController@register');
Route::post('/register','RegisterController@create');
Route::get('/login','LoginController@login');
Route::get('/adminlogin','LoginController@adminlogin');
Route::get('/admindashboard','AdminDashboardController@admindash');
Route::get('/category','AdminDashboardController@admincategory');
Route::get('/logindashboard','LoginDashboardController@logindashboard');
Route::get('/workshop','WorkShopController@workshop');
Route::post('/workshop','WorkShopController@create');
//view db in admindashboard
//Route::get('/workshop','AdminDashboardController@admin');
//to view file
Route::get('/workshop','AdminDashboardController@index');
Route::get('/workshop/{id}','WorkShopController@show');
Route::get('/file/download/{file}','WorkShopController@download');

//for guest form display
Route::get('/guestlecture','WorkShopController@guestlecture');
Route::post('/guestlecture','WorkShopController@store');

/*Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/
