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


Route::get('/', function () {

    return view('home-page',['comments'=>\App\Models\MainSlider::all()]);
});

Route::get('/logout', function () {
    auth()->logout();
    return redirect()->route('login');
});

Route::get('/delivery', function () {
    return view('delivery');
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/re-bin', function () {
    return view('re-bin');
});

Route::get('/about', function () {
    return view('about-page');
});

Route::get('/login', ['as' => 'login', 'uses' => '\App\Http\Controllers\LoginController@getLogin']);

Route::post('/login', '\App\Http\Controllers\LoginController@authenticate');

Route::post('/make-application', '\App\Http\Controllers\ClientApplicationsController@makeApp')
    ->name('make-application');

Route::get("catalog",'\App\Http\Controllers\ProductController@catalog');

Route::resource("catalog/{categorySlug}",\App\Http\Controllers\ProductController::class);

