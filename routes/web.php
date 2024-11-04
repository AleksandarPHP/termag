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
Route::get('/prevoz-jahorina', function () {
    return view('prevoz-jahorina');
});
Route::get('/svadbe', function () {
    return view('svadbe');
});
Route::get('/termag-hotelske-sobe', function () {
    return view('termag-hotelske-sobe');
});
Route::get('/apartmani', function () {
    return view('apartmani');
});
Route::get('/villa-termag', function () {
    return view('villa-termag');
});
Route::get('/detox', function () {
    return view('detox');
});
Route::get('/spa', function () {
    return view('spa');
});
Route::get('/organic-facts', function () {
    return view('organic-facts');
});
Route::get('/o-nama', function () {
    return view('o-nama');
});
Route::get('/eco', function () {
    return view('eco');
});
Route::get('/atrakcije', function () {
    return view('atrakcije');
});
Route::get('/koliba', function () {
    return view('koliba');
});
Route::get('/kamin-sala', function () {
    return view('kamin-sala');
});
Route::get('/hotelski-restoran', function () {
    return view('hotelski-restoran');
});
Route::get('/ski-skola', function () {
    return view('ski-skola');
});
Route::get('/visina-snega', function () {
    return view('visina-snega');
});
Route::get('/ski-staze', function () {
    return view('ski-staze');
});
Route::get('/ski-centar', function () {
    return view('ski-centar');
});
Route::get('/ski-rental', function () {
    return view('ski-rental');
});
Route::get('/ski-pass', function () {
    return view('ski-pass');
});
Route::get('/triatlon', function () {
    return view('triatlon');
});
Route::get('/challenge-race', function () {
    return view('challenge-race');
});
Route::get('/mountainbike-marathon', function () {
    return view('mountainbike-marathon');
});
Route::get('/igraonica', function () {
    return view('igraonica');
});
Route::get('/kuglana', function () {
    return view('kuglana');
});
Route::get('/biciklizam', function () {
    return view('biciklizam');
});
Route::get('/quad-safari', function () {
    return view('quad-safari');
});
Route::get('/ljetnje-avanture', function () {
    return view('ljetne-avanture');
});
Route::get('/specijalni-paketi', function () {
    return view('specijalni-paketi');
});
Route::get('/relax-paket', function () {
    return view('relax-paket');
});
Route::get('/back-to-nature', function () {
    return view('back-to-nature');
});
Route::get('/ljeto-paket', function () {
    return view('ljeto-paket');
});
Route::get('/romanticni-paket', function () {
    return view('romanticni-paket');
});
Route::get('/porodicni-paket', function () {
    return view('porodicni-paket');
});

Auth::routes(['verify' => false, 'register' => false]);

Route::group(['prefix' => 'cms', 'middleware' => ['auth', 'active']], function() {

    Route::get('/', function () { return view('cms.index'); });
    
    Route::resource('users', 'App\Http\Controllers\UsersController')->except('show');
    Route::post('users/ajax', 'App\Http\Controllers\UsersController@ajax');

    Route::resource('pages', 'App\Http\Controllers\PageController')->only('index','update','edit');
    Route::post('pages/ajax', 'App\Http\Controllers\PageController@ajax');  
    Route::get('pages/detail/{id}', 'App\Http\Controllers\PageController@detail'); 
    Route::post('pages/ajax-detail', 'App\Http\Controllers\PageController@ajaxDetail');  
    Route::get('pages/imagedelete/{id}', 'App\Http\Controllers\PageController@removeImage');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
