<?php

use App\Http\Controllers\UserController;
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

// Initial Route
Route::get('/',function(){
    return view('user.home');
});

// Routes for user
Route::prefix('user')->controller(UserController::class)->group(function(){
    // User Pages
    Route::get('home','userHomePage')->name('user#homepage');
    Route::get('about','userAboutPage')->name('user#aboutpage');
    Route::get('projects','userProjectsPage')->name('user#projectspage');
    Route::get('contact','userContactPage')->name('user#contactpage');

    // Send Message
    Route::post('sendMessage','sendMessage')->name('user#sendmessage');
});
