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

$routes = [
    '/' => 'index',
    'prognoza' => 'prognoza',
    'karijera' => 'karijera',
    'galerija' => 'galerija',
    'virtuelna-setnja' => 'virtuelna-setnja',
    'team-building' => 'team-building',
    'konferencijska-sala' => 'konferencijska-sala',
    'konferencija-i-seminari' => 'konferencija-i-seminari',
    'prevoz-jahorina' => 'prevoz-jahorina',
    'svadbe' => 'svadbe',
    'termag-hotelske-sobe' => 'termag-hotelske-sobe',
    'apartmani' => 'apartmani',
    'villa-termag' => 'villa-termag',
    'detox' => 'detox',
    'spa' => 'spa',
    'organic-facts' => 'organic-facts',
    'o-nama' => 'o-nama',
    'eco' => 'eco',
    'atrakcije' => 'atrakcije',
    'koliba' => 'koliba',
    'kamin-sala' => 'kamin-sala',
    'hotelski-restoran' => 'hotelski-restoran',
    'ski-skola' => 'ski-skola',
    'visina-snega' => 'visina-snega',
    'ski-staze' => 'ski-staze',
    'ski-centar' => 'ski-centar',
    'ski-rental' => 'ski-rental',
    'ski-pass' => 'ski-pass',
    'triatlon' => 'triatlon',
    'challenge-race' => 'challenge-race',
    'mountainbike-marathon' => 'mountainbike-marathon',
    'igraonica' => 'igraonica',
    'kuglana' => 'kuglana',
    'biciklizam' => 'biciklizam',
    'quad-safari' => 'quad-safari',
    'ljetnje-avanture' => 'ljetnje-avanture',
    'specijalni-paketi' => 'specijalni-paketi',
    'relax-paket' => 'relax-paket',
    'back-to-nature' => 'back-to-nature',
    'ljeto-paket' => 'ljeto-paket',
    'romanticni-paket' => 'romanticni-paket',
    'porodicni-paket' => 'porodicni-paket',
];

foreach ($routes as $uri => $view) {
    Route::get($uri, fn() => view($view));
}

Route::group(['prefix' => 'en'], function () use ($routes) {
    foreach ($routes as $uri => $view) {
        Route::get($uri, fn() => view($view));
    }
});
Route::post('kontakt', 'App\Http\Controllers\MessageController@kontakt'); 
Auth::routes(['verify' => false, 'register' => false]);

Route::group(['prefix' => 'cms', 'middleware' => ['auth', 'active']], function() {

    Route::get('/', function () { return view('cms.index'); });
    
    Route::resource('users', 'App\Http\Controllers\UsersController')->except('show');
    Route::post('users/ajax', 'App\Http\Controllers\UsersController@ajax');

    Route::resource('pages', 'App\Http\Controllers\PageController')->only('index','update','edit');
    Route::controller(App\Http\Controllers\PageController::class)->group(function () {
        Route::post('pages/ajax',  'ajax');  
        Route::get('pages/detail/{id}', 'detail'); 
        Route::post('pages/ajax-detail/{id}', 'ajaxDetail');  
        Route::get('pages/meta/{id}/edit', 'meta');  
        Route::get('pages/imagedelete/{id}', 'removeImage');
    });

    Route::resource('packages', 'App\Http\Controllers\PackageController')->except('show');
    Route::controller(App\Http\Controllers\PackageController::class)->group(function () {
        Route::post('packages/ajax',  'ajax');  
        Route::get('packages/{id}/options', 'options');
        Route::get('packages/imagedelete/{id}', 'removeImage');
    });

    Route::resource('options', 'App\Http\Controllers\PackageOptionController')->except('show');
    Route::controller(App\Http\Controllers\PackageOptionController::class)->group(function () {
        Route::post('options/ajax/{id}',  'ajax');  
        Route::get('options/{id}/imagedelete/{image}', 'removeImage');
    });

    Route::resource('gallery', 'App\Http\Controllers\GalleryController')->only('index', 'destroy');
    Route::post('gallery/upload', 'App\Http\Controllers\GalleryController@upload');

    Route::resource('menu', 'App\Http\Controllers\MenuController')->except('show');
    Route::post('menu/ajax', 'App\Http\Controllers\MenuController@ajax');  

    Route::resource('messages', 'App\Http\Controllers\MessageController')->except('show');
    Route::post('messages/ajax', 'App\Http\Controllers\MessageController@ajax');  

    Route::resource('settings', 'App\Http\Controllers\SettingsController')->only('update', 'edit');

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
