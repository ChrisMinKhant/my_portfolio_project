<?php

use App\Http\Controllers\AdminController;
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
    return redirect()->route('user#mainpage');
});

// Routes for user
Route::prefix('user')->controller(UserController::class)->group(function(){
    // User Pages
    Route::get('main','userMainPage')->name('user#mainpage');

    // Send Message
    Route::post('sendMessage','sendMessage')->name('user#sendmessage');
});

// Routes for admin
Route::prefix('admin')->controller(AdminController::class)->group(function(){
    //admin login page
    Route::get('registerPage','registerPage')->name('admin#registerpage');
    Route::get('loginPage','loginPage')->name('admin#loginpage');

    //Main Page and Message
    Route::get('messagePannel','messagePannel')->name('admin#messagepannel');
    Route::get('deleteMessage/{id}','deleteMessage')->name('admin#deletemessage');

    //Projects Upload
    Route::get('projectsUploadPage','projectsUploadPage')->name('admin#projectsuploadpage');
    Route::post('projectUpload','projectUpload')->name('admin#projectupload');
    Route::get('messageDetails/{id}','messsageDetails')->name('admin#messagedetails');

});
