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

Route::get('/catering', function () {

    return view('catering',
        ['cateringItems'=>\App\Models\MainSlider::
        where('category',\App\Models\MainSlider::CATERING)->get()]);
});

Route::get('/coffe', function () {

    return view('coffe',
        ['cateringItems'=>\App\Models\MainSlider::
        where('category',\App\Models\MainSlider::CATERING)->get()]);
});

Route::get('/food-box', function () {

    return view('food-box',
        ['cateringItems'=>\App\Models\MainSlider::
        where('category',\App\Models\MainSlider::FOOD_BOX)->get()]);
});

Route::get('/food-shet', function () {

    return view('food-shet',
        ['cateringItems'=>\App\Models\MainSlider::
        where('category',\App\Models\MainSlider::FOOD_SHET)->get()]);
});

Route::get('/login', ['as' => 'login', 'uses' => '\App\Http\Controllers\LoginController@getLogin']);

Route::post('/login', '\App\Http\Controllers\LoginController@authenticate');

Route::post('/make-application', '\App\Http\Controllers\ClientApplicationsController@makeApp')
    ->name('make-application');

Route::get("catalog",'\App\Http\Controllers\ProductController@catalog');

Route::get("catalog/{categorySlug}", '\App\Http\Controllers\ProductController@index');

Route::get("catalog/{categorySlug}/{id}",'\App\Http\Controllers\ProductController@show');

Route::get("profile",'\App\Http\Controllers\ProfileController@index');

Route::get("change-password",'\App\Http\Controllers\ProfileController@changePassword');

Route::post("change-password",'\App\Http\Controllers\ProfileController@changePassword')->name('change-password');
