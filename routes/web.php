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

Route::get('/send-message/{id}', function () {
    return view('sendMessage');
});


Route::post('/send-the-message', 'App\Http\Controllers\DashboardController@updateUserMessage')->name('updateUserMessage');


Route::get('/login', function () {
    return view('auth/login');
});

//auth route for both 
Route::group(['middleware' => ['auth']], function() { 
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
});



    Route::get('/view-user/{id}', 'App\Http\Controllers\DashboardController@singleUser')->name('dashboard.singleUser');
    Route::get('/user/{id}', 'App\Http\Controllers\DashboardController@user')->name('dashboard.user');


// for users
Route::group(['middleware' => ['auth', 'role:user']], function() { 
    Route::get('/dashboard/myprofile', 'App\Http\Controllers\DashboardController@myprofile')->name('dashboard.myprofile');
});
// for users
Route::group(['middleware' => ['auth', 'role:user']], function() { 
    Route::get('/dashboard/updateprofile', 'App\Http\Controllers\DashboardController@updateprofile')->name('dashboard.updateprofile');
});

Route::group(['middleware' => ['auth', 'role:user']], function() { 
    Route::post('updateMyProfile', 'App\Http\Controllers\DashboardController@updateMyProfile')->name('updateMyProfile');
});



// for blogwriters
Route::group(['middleware' => ['auth', 'role:blogwriter']], function() { 
    Route::get('/dashboard/postcreate', 'App\Http\Controllers\DashboardController@postcreate')->name('dashboard.postcreate');
});

require __DIR__.'/auth.php';