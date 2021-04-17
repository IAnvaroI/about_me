<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactingUserController;

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
    return view('welcome');
});

Route::get('/about_info', function () {
    return view('about_me');
})->name('about-me');

Route::get('/contact_form', function () {
    return view('contact_me');
})->name('contact-me');

Route::get(
    '/contact_form/request',
    [ContactingUserController::class, 'create']
)->name('request');

Route::get( '/test', function () {
        return view('test');
});
