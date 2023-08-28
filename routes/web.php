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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/','App\Http\Controllers\AcceuilController@index');
Route::get('/nouvelles','App\Http\Controllers\AcceuilController@nouvelles');
Route::get('/apropos','App\Http\Controllers\AcceuilController@about');
Route::get('/actualites','App\Http\Controllers\AcceuilController@actualites');
Route::get('/actualite/{slug}','App\Http\Controllers\AcceuilController@actualite');
Route::get('/nouvelle/{slug}','App\Http\Controllers\AcceuilController@nouvelle');
// Route::get('/gallerie','App\Http\Controllers\AcceuilController@galleries');
Route::get('/contact','App\Http\Controllers\AcceuilController@contact');
Route::get('/lesgalleries','App\Http\Controllers\AcceuilController@galleries');

//Admin Routes
Route::get('/dashboard','App\Http\Controllers\AdminController@index')->middleware('isLoggedIn');
Route::get('/connecter','App\Http\Controllers\AdminController@login')->middleware("alreadyLoggedIn");
Route::get('/enregistrer','App\Http\Controllers\AdminController@register')->middleware("alreadyLoggedIn");
Route::get('/deconnecter','App\Http\Controllers\AdminController@deconnecter');
Route::post('/signup','App\Http\Controllers\AdminController@createaccount')->name('signup');
Route::post('/signin','App\Http\Controllers\AdminController@accedercompte')->name('signin');

//sliders
Route::get('/sliders','App\Http\Controllers\SliderController@sliders')->middleware('isLoggedIn');
Route::get('/ajouterslider','App\Http\Controllers\SliderController@ajouterslider')->middleware('isLoggedIn');
Route::post('/sauverslider','App\Http\Controllers\SliderController@sauverSlider')->middleware('isLoggedIn');
Route::post('/modifierslider','App\Http\Controllers\SliderController@modifierslider')->middleware('isLoggedIn');
Route::get('/edit_slider/{id}','App\Http\Controllers\SliderController@edit_slider')->middleware('isLoggedIn');
Route::get('/supprimerslider/{id}','App\Http\Controllers\SliderController@supprimerslider')->middleware('isLoggedIn');
Route::get('/desactiver_slider/{id}','App\Http\Controllers\SliderController@desactiver_slider')->middleware('isLoggedIn');
Route::get('/activer_slider/{id}','App\Http\Controllers\SliderController@activer_slider')->middleware('isLoggedIn');

//nouvelles
//sliders
Route::get('/news','App\Http\Controllers\NouvelleController@nouvelles')->middleware('isLoggedIn');
Route::get('/ajouternews','App\Http\Controllers\NouvelleController@ajouternouvelle')->middleware('isLoggedIn');
Route::post('/sauvernews','App\Http\Controllers\NouvelleController@sauvernouvelle')->middleware('isLoggedIn');
Route::post('/modifiernews','App\Http\Controllers\NouvelleController@modifiernouvelle')->middleware('isLoggedIn');
Route::get('/edit_news/{id}','App\Http\Controllers\NouvelleController@edit_nouvelle')->middleware('isLoggedIn');
Route::get('/supprimernews/{id}','App\Http\Controllers\NouvelleController@suprimernouvelle')->middleware('isLoggedIn');
//blog
Route::get('/blogs','App\Http\Controllers\BlogController@blogs')->middleware('isLoggedIn');
Route::get('/ajouterblog','App\Http\Controllers\BlogController@ajouterblog')->middleware('isLoggedIn');
Route::post('/sauverblog','App\Http\Controllers\BlogController@sauverblog')->middleware('isLoggedIn');
Route::post('/modifierblog','App\Http\Controllers\BlogController@modifierblog')->middleware('isLoggedIn');
Route::get('/edit_blog/{id}','App\Http\Controllers\BlogController@edit_blog')->middleware('isLoggedIn');
Route::get('/supprimerblog/{id}','App\Http\Controllers\BlogController@suprimerblog')->middleware('isLoggedIn');
//gallerie
//blog
Route::get('/galleries','App\Http\Controllers\GallerieController@galleries')->middleware('isLoggedIn');
Route::get('/ajoutergallerie','App\Http\Controllers\GallerieController@ajoutergallerie')->middleware('isLoggedIn');
Route::post('/sauvergallerie','App\Http\Controllers\GallerieController@sauvergallerie')->middleware('isLoggedIn');
Route::post('/modifiergallerie','App\Http\Controllers\GallerieController@modifiergallerie')->middleware('isLoggedIn');
Route::get('/edit_gallerie/{id}','App\Http\Controllers\GallerieController@edit_gallerie')->middleware('isLoggedIn');
Route::get('/supprimergallerie/{id}','App\Http\Controllers\GallerieController@suprimergallerie')->middleware('isLoggedIn');
Auth::routes();
Route::get('/home', ['App\Http\Controllers\HomeController::class', 'index'])->name('home');
//blog
Route::get('/documents','App\Http\Controllers\DocumentController@documents')->middleware('isLoggedIn');
Route::get('/ajouterdocument','App\Http\Controllers\DocumentController@ajouterdocument')->middleware('isLoggedIn');
Route::post('/sauverdocument','App\Http\Controllers\DocumentController@sauverdocument')->middleware('isLoggedIn');
Route::post('/modifierdocument','App\Http\Controllers\DocumentController@modifierdocument')->middleware('isLoggedIn');
Route::get('/edit_document/{id}','App\Http\Controllers\DocumentController@edit_document')->middleware('isLoggedIn');
Route::get('/supprimerdocument/{id}','App\Http\Controllers\DocumentController@suprimerdocument')->middleware('isLoggedIn');
