<?php

use App\Http\Controllers\MenuController;
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

// Route::get('/view',function(){
//     return view ('view');
// });

Route::get('/',[MenuController::class,'view']);
Route::get('/dashboard',[MenuController::class,'dashboard']);
Route::get('/manajemen',[MenuController::class,'manajemen']);
Route::get('/farmasi',[MenuController::class,'farmasi']);
Route::get('/teknik_informatika',[MenuController::class,'teknik_i']);
Route::get('/about',[MenuController::class,'about']);
Route::get('/kontak',[MenuController::class,'contact']);
Route::get('/logout', function(){
    Auth::logout();
    return Redirect::to('/');
 });
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');