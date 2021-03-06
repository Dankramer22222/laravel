<?php

use App\Http\Controllers\MainController;


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
//отслеживание юрл главной страницы
Route::get('/', [MainController::class, 'home']);
Route::get('/about', [MainController::class, 'about']);
Route::get('/payment', [MainController::class, 'payment']);
Route::get('/map', [MainController::class, 'map']);
Route::get('/review', [MainController::class, 'review']);
Route::get('/gallery', [MainController::class, 'gallery']);
Route::post('/review/check', [MainController::class, 'review_check']);





//
//Route::get('/user/{id}/{name}', function ($id,$name) {
  //  return 'Id: '.$id.' Name: '.$name;
//});
