<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Chart\VornoiChartController;
use App\Http\Controllers\Data\ChordMatrixController;
use App\Http\Controllers\Data\HommeFemmeChart;
use App\Http\Controllers\Data\NHLChart;
use App\Http\Controllers\Data\TrancheAgeController;
use App\Http\Controllers\DensityChartController;
use App\Http\Controllers\RechercheController;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/categorie', [\App\Http\Controllers\CategorieController::class, 'index'])
    ->name('categorie.index');

Route::get('/categorie/create', [\App\Http\Controllers\CategorieController::class, 'create'])
    ->name('categorie.create');

Route::post('/categorie/create', [\App\Http\Controllers\CategorieController::class, 'store'])
    ->name('categorie.store');

Route::get('/categorie/destroy/{categorie}', [\App\Http\Controllers\CategorieController::class, 'destroy'])
    ->name('categorie.destroy');

Route::get('/articles', [\App\Http\Controllers\ArticleController::class, 'index'])
    ->name('article.index');

Route::get('/article/create', [\App\Http\Controllers\ArticleController::class, 'create'])
    ->name('article.create');

Route::post('/article/create', [\App\Http\Controllers\ArticleController::class, 'store'])
    ->name('article.store');

Route::get('/article/edit/{article}', [ArticleController::class, 'edit']);
Route::post('/article/update/', [ArticleController::class, 'update']);


Route::get('/article/{article}', [\App\Http\Controllers\ArticleController::class, 'read'])
    ->name('article.read');

Route::get('/produit', [\App\Http\Controllers\ProduitController::class, 'index'])
    ->name('produit.index');

Route::get('article/destroy/{article}', [\App\Http\Controllers\ArticleController::class, 'destroy'])
    ->name('article.destroy');

Route::get('/produit/{type}', [\App\Http\Controllers\ProduitController::class, 'type'])
    ->name('produit.type');

Route::get('stats', [\App\Http\Controllers\StatsController::class, 'index'])
    ->name('stats.index');

Route::post('/recherche', [RechercheController::class, 'index']);

Route::get('recommendations', [\App\Http\Controllers\RecommendationController::class, 'index'])
    ->name('recommendation.index');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');


Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

Route::get('/data/chord', [ChordMatrixController::class, 'handle']);
Route::get('/data/homme-femme-chart', [HommeFemmeChart::class, 'data']);
Route::get('/data/tranche-age', [TrancheAgeController::class, 'data']);
Route::get('/data/density', [DensityChartController::class, 'data']);
Route::get('/data/nhl', [NHLChart::class, 'data']);
Route::get('/data/voronoi', [VornoiChartController::class, 'data']);
