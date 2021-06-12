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

Route::view('/','front_end/index');
Route::view('/about','front_end/about');
Route::view('/contact','front_end/contact');
Route::view('/privacy','front_end/privacy');
Route::view('/term','front_end/term');
Route::view('/pizza-near-me','front_end/pizza-near-me');
Route::view('/mexican-near-me','front_end/mexican-near-me');
Route::view('/donuts-near-me','front_end/donuts-near-me');
Route::view('/seafood-near-me','front_end/seafood-near-me');
Route::view('/burgers-near-me','front_end/burgers-near-me');

Route::view('/brunch-near-me','front_end/brunch-near-me');

Route::get('/menu-and-price', [App\Http\Controllers\MenuPriceController::class, 'menuprices'])->name('menuprices');
Route::get('/menu-and-price/{id}', [App\Http\Controllers\MenuPriceController::class, 'menua'])->name('menuprices');
Route::get('/menu-and-price/{id}/{id1}/{id2}', [App\Http\Controllers\MenuPriceController::class, 'menuap'])->name('menupricess');

Route::get('/menu/{id}', [App\Http\Controllers\MenuPriceController::class, 'menupricescities'])->name('menupricescities');
Route::get('/menu/{id}/{id1}', [App\Http\Controllers\MenuPriceController::class, 'menupricessecondlast'])->name('menupricessecondlast');
Route::get('/menu/{id}/{id1}/{id2}', [App\Http\Controllers\MenuPriceController::class, 'menupricelast'])->name('menupricessecondlast');
Route::get('/menu/{id}/{id1}/{id2}/{id3}', [App\Http\Controllers\MenuPriceController::class, 'menupricelast1'])->name('menupricelast1');

Route::view('/menu/aandw/alabama/birmingham/310558','front_end/menu/aandw/alabama/birmingham/310558/index');



Route::get('/cuisine', [App\Http\Controllers\CuisineController::class, 'cuisins'])->name('cuisins');
Route::get('/cuisine/{id}', [App\Http\Controllers\CuisineController::class, 'cuisinscity'])->name('cuisinscity');
Route::get('/cuisine/{id}/{id1}', [App\Http\Controllers\CuisineController::class, 'cuisinsmenu'])->name('cuisinsmenu');

Route::view('/menu/arya-kabob-house/new-york','front_end/menu/arya-kabob-house/new-york/index');
Route::view('/menu/arya-kabob-house/new-york/flushing','front_end/menu/arya-kabob-house/new-york/flushing/index');
Route::view('/menu/arya-kabob-house/new-york/flushing/658336','front_end/menu/arya-kabob-house/new-york/flushing/658336/index');

Route::view('/menu/chick-fil-a','front_end/menu/chick-fil-a/alabama/birmingham/index');

Route::view('/menu/chick-fil-a/alabama/birmingham/','front_end/menu/chick-fil-a/alabama/birmingham/index');
Route::view('/menu/chick-fil-a/alabama/birmingham/24333','front_end/menu/chick-fil-a/alabama/birmingham/24333/index');

Route::get('/restaurant-near-me', [App\Http\Controllers\ScrapperController::class, 'restaurant'])->name('restaurant');
Route::get('/location/{id}', [App\Http\Controllers\ScrapperController::class, 'location'])->name('location.state');

Route::get('/location/{id}/{id1}', [App\Http\Controllers\ScrapperController::class, 'locationcity'])->name('location.city');
Route::get('/location/{id}/{id1}/{id2}', [App\Http\Controllers\ScrapperController::class, 'locationcitycat'])->name('location.locationcitycat');

Route::get('/nutrition', [App\Http\Controllers\nutrition::class, 'index'])->name('nutrition');
//Route::view('/nutrition/applebees','front_end/nutrition/applebees/index');
Route::get('/nutrition/{id}', [App\Http\Controllers\nutrition::class, 'state'])->name('nutrition.state');
Route::get('/nutrition/{id}/{id1}', [App\Http\Controllers\nutrition::class, 'fact'])->name('nutrition.fact');

Route::view('/menu/applebees/alabama','front_end/menu/applebees/alabama/index');
Route::view('/menu/applebees/alabama/athens','front_end/menu/applebees/alabama/athens/index');
Route::view('/menu/applebees/alabama/athens/1824','front_end/menu/applebees/alabama/athens/1824/index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
