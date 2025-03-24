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
        'rezervacija ' => 'rezervacija ',
        'galerija' => 'galerija',
        'virtuelna-setnja' => 'virtuelna-setnja',
        'team-building' => 'team-building',
        'konferencijska-sala' => 'konferencijska-sala',
        'konferencija-i-seminari' => 'konferencija-i-seminari',
        'prevoz-jahorina' => 'prevoz-jahorina',
        'svadbe' => 'svadbe',
        'dokumenti' => 'dokumenti',
        'informacije' => 'informacije',
        'meni' => 'meni',
        'vile-borghetto' => 'vile-borghetto',
        'formular' => 'formular',
        'formular-restoran' => 'formular-restoran',
        'formular-seminari' => 'formular-seminari',
        'termag-hotelske-sobe' => 'termag-hotelske-sobe',
        'apartmani' => 'apartmani',
        'villa-termag' => 'villa-termag',
        'detox' => 'detox',
        'spa' => 'spa',
        'masaze-i-tretmani' => 'masaze-i-tretmani',
        'masaze' => 'masaze',
        'posebni-tretmani' => 'posebni-tretmani',
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

    $redirects = [
        'rs/naslovna/konferencije-seminari' => 'konferencija-i-seminari',
        'spa-and-wellness'=>'spa',
        'kamera'=>'visina-snega',
        'termagchallengerace'=>'challenge-race',
        'termag-mtb-bike-maraton'=>'mountainbike-marathon',
        'rezervacije'=>'/',
        'sobe'=>'termag-hotelske-sobe',
        'galerija/hotel'=>'galerija',
        'galerija/jahorina'=>'galerija',
        'galerija/koliba'=>'galerija',
        'galerija/konferencijska-sala'=>'galerija',
        'galerija/restoran'=>'galerija',
        'galerija/sobe'=>'galerija',
        'galerija/spa'=>'galerija',
        'galerija/usluge'=>'galerija',
        'galerija/smjestaj-apartmani'=>'galerija',
        'galerija/zabava'=>'galerija',
        'galerija/villa-termag'=>'galerija',
        'galerija/vjencanja'=>'galerija',
        'galerija/team-building'=>'galerija',
        'ljetne-aktivnosti'=>'ljetnje-avanture',
        'usluge'=>'/',
        'o-hotelu'=>'o-nama',
        'jahorina'=>'/',
        'prijatelji-hotela'=>'/',
        'download'=>'/',
        'kontakt'=>'/',
        'promo-paketi'=>'specijalni-paketi',
        'organizacija-vjencanja'=>'svadbe',
        'izleti'=>'/',
        'zabava'=>'/',
        'zdravstveni-turizam'=>'/',
        'transfer'=>'/',
        'ketering-i-organizacija'=>'konferencija-i-seminari',
        'termag-jahorina-tour-prijava'=>'/',
        'rs/naslovna/specijalne-ponude/ski-opening'=>'specijalni-paketi',
        'relax-paketi'=>'relax-paket',
        'romanticni-paketi'=>'romanticni-paket',
        'rs/povratak-prirodi-paket-2-nocenja'=>'back-to-nature',
        'rs/naslovna/specijalne-ponude/promo-paketi/porodicni-paket'=>'specijalni-paketi',
        'rs/naslovna/konferencije-seminari/preuzmi-formular'=>'konferencija-i-seminari',
        'en/hotel-termag-jahorina/conferences-seminars'=>'konferencija-i-seminari',
        'en/spa-and-wellness'=>'en/spa',
        'en/kamera'=>'visina-snega',
        'en/termagchallengerace'=>'en/challenge-race',
        'en/rezervacije'=>'/',
        'en/sobe'=>'en/termag-hotelske-sobe',
        'en/galerija/hotel'=>'/',
        'en/galerija/jahorina'=>'galerija',
        'en/galerija/koliba'=>'galerija',
        'en/galerija/konferencijska-sala'=>'galerija',
        'en/galerija/restoran'=>'galerija',
        'en/galerija/sobe'=>'galerija',
        'en/galerija/spa'=>'galerija',
        'en/galerija/usluge'=>'galerija',
        'en/galerija/smjestaj-apartmani'=>'galerija',
        'en/galerija/zabava'=>'galerija',
        'en/galerija/villa-termag'=>'galerija',
        'en/galerija/vjencanja'=>'galerija',
        'en/galerija/team-building'=>'galerija',
        'en/ljetne-aktivnosti'=>'en/ljetnje-avanture',
        'en/usluge'=>'/',
        'en/o-hotelu'=>'en/o-nama',
        'en/jahorina'=>'/',
        'en/prijatelji-hotela'=>'/',
        'en/download'=>'/',
        'en/kontakt'=>'/',
        'en/promo-paketi'=>'/',
        'en/organizacija-vjencanja'=>'en/svadbe',
        'en/izleti'=>'/',
        'en/zabava'=>'/',
        'en/zdravstveni-turizam'=>'/',
        'en/transfer'=>'/',
        'en/ketering-i-organizacija'=>'/',
        'termag-jahorina-tour-form'=>'/',
        'en/naslovna/specijalne-ponude/ski-opening'=>'/',
        'en/relax-package'=>'en/relax-paket',
        'en/romantic-package'=>'en/romanticni-paket',
        'en/back-to-nature-package-2-nights'=>'en/back-to-nature',
        'en/hotel-termag-jahorina/special-offers/promo-packages/family-package'=>'en/porodicni-paket',
        'en/hotel-termag-jahorina/conferences-seminars/forms'=>'en/konferencija-i-seminari',
        'challenge-race-form-ru'=>'challenge-race',
        'ru/'=>'/',
        'ru/spa-and-wellness'=>'spa',
        'ru/kamera'=>'visina-snega',
        'ru/challenge-race'=>'challenge-race',
        'ru/rezervacije'=>'/',
        'ru/sobe'=>'termag-hotelske-sobe',
        'ru/apartmani'=>'v',
        'ru/villa-termag'=>'villa-termag',
        'ru/galerija/hotel'=>'galerija',
        'ru/galerija/jahorina'=>'galerija',
        'ru/galerija/koliba'=>'galerija',
        'ru/galerija/konferencijska-sala'=>'galerija',
        'ru/galerija/restoran'=>'galerija',
        'ru/galerija/sobe'=>'galerija',
        'ru/galerija/spa'=>'galerija',
        'ru/galerija/usluge'=>'galerija',
        'ru/galerija/smjestaj-apartmani'=>'galerija',
        'ru/galerija/zabava'=>'galerija',
        'ru/galerija/villa-termag'=>'galerija',
        'ru/galerija/vjencanja'=>'galerija',
        'ru/galerija/team-building'=>'galerija',
        'ru/ljetne-aktivnosti'=>'ljetnje-avanture',
        'ru/usluge'=>'/',
        'ru/o-hotelu'=>'o-nama',
        'ru/jahorina'=>'/',
        'ru/prijatelji-hotela'=>'/',
        'ru/download'=>'/',
        'ru/galerija'=>'galerija',
        'ru/kontakt'=>'/',
        'ru/kamin-sala'=>'kamin-sala',
        'ru/hotelski-restoran'=>'hotelski-restoran',
        'ru/koliba'=>'koliba',
        'ru/promo-paketi'=>'specijalni-paketi',
        'ru/organizacija-vjencanja'=>'svadbe',
        'ru/izleti'=>'/',
        'ru/zabava'=>'/',
        'ru/zdravstveni-turizam'=>'organic-facts',
        'ru/transfer'=>'/',
        'ru/konferencijska-sala'=>'konferencijska-sala',
        'ru/ketering-i-organizacija'=>'/',
        'ru/team-building'=>'team-building',
        'ru/Релакс-пакет'=>'relax-paket',
        'ru/Романтичный-пакет'=>'romanticni-paket',
        'ru/adrenalin-paket-2-nocenja'=>'/',
        ];

foreach ($redirects as $old => $new) {
    Route::get($old, function() use ($new) { 
        return Redirect::to($new, 301); 
    });
}

foreach ($routes as $uri => $view) {
    Route::get($uri, fn() => view($view));
}

Route::group(['prefix' => 'en'], function () use ($routes) {
    foreach ($routes as $uri => $view) {
        Route::get($uri, fn() => view($view));
    }
    Route::get('blog', 'App\Http\Controllers\HomeController@blog');
    Route::get('blog/{id}/{slug}', 'App\Http\Controllers\HomeController@blogDetail');
});

Route::get('blog', 'App\Http\Controllers\HomeController@blog');
Route::get('blog/{id}/{slug}', 'App\Http\Controllers\HomeController@blogDetail');

Route::get('sitemap.xml', 'App\Http\Controllers\SitemapController@index');

Route::post('upload-file', 'App\Http\Controllers\MessageController@kontakt'); 
Route::post('formular', 'App\Http\Controllers\MessageController@formular'); 
Route::post('formular-restoran', 'App\Http\Controllers\MessageController@formularRestaurant');
Route::post('formular-seminari', 'App\Http\Controllers\MessageController@formularSeminars'); 
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

    Route::resource('massage', 'App\Http\Controllers\MasageController')->except('show');
    Route::controller(App\Http\Controllers\MasageController::class)->group(function () {
        Route::post('massage/ajax',  'ajax');  
        Route::get('massage/detail/{id}', 'detail'); 
        Route::post('massage/ajax-detail/{id}', 'ajaxDetail');  
        Route::get('massage/meta/{id}/edit', 'meta');  
        Route::get('massage/imagedelete/{id}', 'removeImage');
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

    Route::resource('documents', 'App\Http\Controllers\DocumentsController')->only('index', 'destroy');
    Route::post('documents/upload', 'App\Http\Controllers\DocumentsController@upload');

    Route::resource('blogs', 'App\Http\Controllers\BlogController')->except('show');
    Route::post('blogs/ajax', 'App\Http\Controllers\BlogController@ajax');  

    Route::resource('albums', 'App\Http\Controllers\AlbumController')->except('show');

    Route::resource('info', 'App\Http\Controllers\InfoGallryController')->except('show');
    Route::controller(App\Http\Controllers\InfoGallryController::class)->prefix('info')->group(function () {
        Route::post('/ajax', 'ajax');    
        Route::post('/{id}/upload', 'upload');
        Route::delete('/{id}/delete', 'delete');
    });
    Route::resource('menu', 'App\Http\Controllers\MenuController')->except('show');
    Route::post('menu/ajax', 'App\Http\Controllers\MenuController@ajax');  

    Route::resource('testimonials', 'App\Http\Controllers\TestimonialController')->except('show');
    Route::post('testimonials/ajax', 'App\Http\Controllers\TestimonialController@ajax');  

    Route::resource('messages', 'App\Http\Controllers\MessageController')->except('show');
    Route::post('messages/ajax', 'App\Http\Controllers\MessageController@ajax');  

    Route::resource('settings', 'App\Http\Controllers\SettingsController')->only('update', 'edit');

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');