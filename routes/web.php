<?php

use Illuminate\Support\Facades\Route; // Tutorial #10 Import
use App\Http\Controllers\UserController; // Tutorial #9 UserController
use App\Http\Controllers\HomeController; // Controllers
use App\Http\Controllers\LanguageController; // Controllers
use App\Http\Controllers\AboutMeController; // Controllers
use App\Http\Controllers\AdminController; // Controllers
use App\Http\Middleware\AgeVerify;

// --> WELCOME PAGE <-- //

Route::get('/', function () {
    return view('welcome');
});


// --> USER <-- //

// Route to get user data
Route::get('/user', [UserController::class, 'getUser']);

// Route to display  user2 get a data - Routing Parameters
Route::get('/user2/{name}', [UserController::class, 'aboutUser']);


// --> HOME <-- //

//Tutorial #10 View - Simple Routing --> Standard
Route::view('/home', 'home');

//Routes for dashboard pages (Tutorial #10 View) mainHome-
// Alternate --> 
Route::get('main-home', [HomeController::class, 'mainHome']);

// Middleware to Home Page
Route::view('/home', 'home')->middleware(AgeVerify::class);

// Route Group with prefix of home page Tutorial #21 and #22 Group using controller
Route::prefix('home')->group(function(){
    Route::view('/language', 'language');
    Route::get('/bio', [AboutMeController::class, 'userBio']);
    Route::get('/form', [UserController::class, 'mainForm']);
    Route::get('/admin', [AdminController::class,'adminUser']);

    Route::prefix('form')->group(function(){
        Route::post('/addUser', [UserController::class,'addUser']);
    });
});

// --> LANGUAGE <-- //

// Basic Routing - handles simple request like GET, POST
Route::get('/language', function () {
    return view('language');
});

// Route for the sample page (Tutorial #12)
Route::get('sub-language', [LanguageController::class, 'subLanguage']);

// Route to view the Homepage using the Name Routes in Tutorial #20  
Route::view('home/language', 'language');


// --> ABOUT ME <-- //

// Route to bio page - using Controller Route
Route::get('bio', [AboutMeController::class, 'userBio']);

// Route to view the userBio page, which displays about me using this method
Route::get('home/bio', [AboutMeController::class, 'userBio']);


// --> OTHER <-- //

// Route to load the main dashboard page with a dynamic username
Route::get('sub-page/{name}', [UserController::class, 'SubPage']); 


// --> ADMIN <-- //

// Route for the admin page
Route::get('admin-page', [AdminController::class, 'adminPage']);

// Route to Admin
Route::get('/admin', [AdminController::class, 'adminUser']);


// --> FORM <-- //

// Route to view the User Form Page(Tutorial #14)
// Alternate
Route::view('/form', 'userForm');
Route::get('home-form', [UserController::class, 'mainForm']);

// Standard
Route::view('home/form', 'userForm');

// It will lead to the result of your filled-out information 
// ps. this will be the alternate
Route::post('addUser', [UserController::class,'addUser']);

// Route to view the userAdd page, which displays the result of the filled-out form.
// ps. this will be the standard
Route::post('home/form/addUser', [UserController::class, 'addUser']);


// --> MIDDLEWARE <-- //

// First method of middleware groupings
Route::view('/admin', 'admin.admin')->middleware('verify1');

// Group middleware in routing
Route::middleware('verify1')->group(function(){
    Route::view('/admin', 'admin.admin');
});



