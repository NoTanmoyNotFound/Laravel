<?php

use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
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
// route::get('/contact', function () {
//     return view('contact');
// });

route::view('contact','/contact');
route::view('hello','/hello');

Route::get('user/{id}',[userController::class,'show']);