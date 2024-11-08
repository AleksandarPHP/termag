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

Route::view('/','index');
Route::view('prognoza','prognoza');
Route::view('karijera','karijera');
Route::view('galerija','galerija');
Route::view('virtuelna-setnja','virtuelna-setnja');
Route::view('team-building','team-building');
Route::view('konferencijska-sala','konferencijska-sala');
Route::view('konferencija-i-seminari','konferencija-i-seminari');
Route::view('prevoz-jahorina','prevoz-jahorina');
Route::view('svadbe','svadbe');
Route::view('termag-hotelske-sobe','termag-hotelske-sobe');
Route::view('apartmani','apartmani');
Route::view('villa-termag','villa-termag');
Route::view('detox','detox');
Route::view('spa','spa');
Route::view('organic-facts','organic-facts');
Route::view('o-nama','o-nama');
Route::view('eco','eco');
Route::view('atrakcije','atrakcije');
Route::view('koliba','koliba');
Route::view('kamin-sala','kamin-sala');
Route::view('hotelski-restoran','hotelski-restoran');
Route::view('ski-skola','ski-skola');
Route::view('visina-snega','visina-snega');
Route::view('ski-staze','ski-staze');
Route::view('ski-centar','ski-centar');
Route::view('ski-rental','ski-rental');
Route::view('ski-pass','ski-pass');
Route::view('triatlon','triatlon');
Route::view('challenge-race','challenge-race');
Route::view('mountainbike-marathon','mountainbike-marathon');
Route::view('igraonica','igraonica');
Route::view('kuglana','kuglana');
Route::view('biciklizam','biciklizam');
Route::view('quad-safari','quad-safari');
Route::view('ljetnje-avanture','ljetnje-avanture');
Route::view('specijalni-paketi','specijalni-paketi');
Route::view('relax-paket','relax-paket');
Route::view('back-to-nature','back-to-nature');
Route::view('ljeto-paket','ljeto-paket');
Route::view('romanticni-paket','romanticni-paket');
Route::view('porodicni-paket','porodicni-paket');

Auth::routes(['verify' => false, 'register' => false]);

Route::group(['prefix' => 'cms', 'middleware' => ['auth', 'active']], function() {

    Route::get('/', function () { return view('cms.index'); });
    
    Route::resource('users', 'App\Http\Controllers\UsersController')->except('show');
    Route::post('users/ajax', 'App\Http\Controllers\UsersController@ajax');

    Route::resource('pages', 'App\Http\Controllers\PageController')->only('index','update','edit');
    Route::controller(App\Http\Controllers\PageController::class)->group(function () {
        Route::post('pages/ajax',  'ajax');  
        Route::get('pages/detail/{id}', 'detail'); 
        Route::post('pages/ajax-detail', 'ajaxDetail');  
        Route::get('pages/imagedelete/{id}', 'removeImage');
    });

    Route::resource('gallery', 'App\Http\Controllers\GalleryController')->only('index', 'destroy');
    Route::post('gallery/upload', 'App\Http\Controllers\GalleryController@upload');

    Route::resource('menu', 'App\Http\Controllers\MenuController')->except('show');
    Route::post('menu/ajax', 'App\Http\Controllers\MenuController@ajax');  

    Route::resource('settings', 'App\Http\Controllers\SettingsController')->only('update', 'edit');

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
