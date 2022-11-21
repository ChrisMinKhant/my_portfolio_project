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

//Dashboard Route For JetStream
Route::get('/dashboard',function(){
    return redirect()->route('admin#messagepannel');
});

//Login & Register Route
Route::controller(AdminController::class)->group(function(){
    //admin register
    Route::get('registerPage','registerPage')->name('admin#registerpage');
    Route::post('registerAdmin','registerAdmin')->name('admin#registerAdmin');

    //admin login
    Route::get('loginPage','loginPage')->name('admin#loginpage');
    Route::post('loginAdmin','loginAdmin')->name('admin#loginadmin');
});

// Routes for user
Route::prefix('user')->controller(UserController::class)->group(function(){
    // User Pages
    Route::get('main','userMainPage')->name('user#mainpage');

    // Send Message
    Route::post('sendMessage','sendMessage')->name('user#sendmessage');
});

// Routes for admin
Route::prefix('admin')->controller(AdminController::class)->middleware('AdminAuth')->group(function(){
    //Main Page and Message
    Route::get('messagePannel','messagePannel')->name('admin#messagepannel');
    Route::get('deleteMessage/{id}','deleteMessage')->name('admin#deletemessage');

    //Projects Upload
    Route::get('projectsUploadPage','projectsUploadPage')->name('admin#projectsuploadpage');
    Route::post('projectUpload','projectUpload')->name('admin#projectupload');
    Route::get('messageDetails/{id}','messsageDetails')->name('admin#messagedetails');

});
