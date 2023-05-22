<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

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
Route::get('/crud', [App\Http\Controllers\CrudController::class, 'index'])->name('crud');


// Google login
Route::get('login/google', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGoogleCallback']);

// Facebook login
Route::get('login/facebook', [App\Http\Controllers\Auth\LoginController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('login/facebook/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleFacebookCallback']);

// Github login
Route::get('login/github', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGithub'])->name('login.github');
Route::get('login/github/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGithubCallback']);


// Linkdin login
Route::get('login/linkedin', [App\Http\Controllers\Auth\LoginController::class, 'redirectToLinkedin'])->name('login.linkdin');
Route::get('login/linkedin/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleLinkedinCallback']);

// TikTok login
Route::get('/login/tiktok', [App\Http\Controllers\Auth\LoginController::class, 'redirectToTiktok'])->name('login.tiktok');
Route::get('/login/tiktok/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleTiktokCallback']);

// slack login
Route::get('/login/slack', [App\Http\Controllers\Auth\LoginController::class, 'redirectToSlack'])->name('login.slack');
Route::get('/login/slack/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleSlackCallback']);


