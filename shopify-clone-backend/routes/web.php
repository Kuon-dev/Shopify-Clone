<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/


Route::get('/users', [UserController::class, 'index']);


/*
Route::get('/users', function () {
    return view('user-data');
});
*/

// Route to users - JSON object
/*
Route::get('/users', function () {
    return response() ->json([
        'email' => 'test@gmail.com',
        'password' => '123456'
    ]);
});
*/

// Route redirect immediate - function
/*
Route::get('/users', function () {
    return redirect('/');
});
*/

