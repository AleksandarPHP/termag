<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/prognoza', function () {
    return view('prognoza');
});
Route::get('/karijera', function () {
    return view('karijera');
});
Route::get('/galerija', function () {
    return view('galerija');
});
Route::get('/virtuelna-setnja', function () {
    return view('virtuelna-setnja');
});
Route::get('/team-building', function () {
    return view('team-building');
});
Route::get('/team-building', function () {
    return view('team-building');
});
Route::get('/konferencijska-sala', function () {
    return view('konf-sala');
});
Route::get('/konferencija-i-seminari', function () {
    return view('konferencija-i-seminari');
});

Auth::routes(['verify' => false, 'register' => false]);

Route::group(['prefix' => 'cms', 'middleware' => ['auth', 'active']], function() {

    Route::get('/', function () { return view('cms.index'); });
    
    Route::resource('users', 'App\Http\Controllers\UsersController')->except('show');
    Route::post('users/ajax', 'App\Http\Controllers\UsersController@ajax');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
