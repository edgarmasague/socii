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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profile', [App\Http\Controllers\HomeController::class, 'index'])->name('profile');

/*
--routes--
account
account/save
account/edit
account/password
account/email
account/notifications
account/privacy
register
recover
legal/term
legal/privacy
about
{{username}}
{{username}}/tagged
{{username}}/followers
{{username}}/following
post/create
post/delete
post/{{code_post}}
explore
*/