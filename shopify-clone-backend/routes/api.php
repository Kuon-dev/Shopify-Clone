<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\users;
use App\Models\products;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users', function () {
    return users::all();
});

Route::post('/users', function () {
    request() ->validate([
        'username' => 'required',
        'email' => 'required',
        'password' => 'required',
    ]);

    return users::create([
        'username' => request('username'),
        'email' => request('email'),
        'password' => request('password'),
    ]);
});

Route::put('/users/{users}', function (users $users) {
    request() ->validate([
        'username' => 'required',
        'email' => 'required',
        'password' => 'required',
    ]);

    $users -> update([
        'username' => request('username'),
        'email' => request('email'),
        'password' => request('password'),
    ]);
});

// products
Route::get('/products', function () {
    return products::all();
});

Route::post('/products', function () {
    request() ->validate([
        'product_name' => 'required',
        'quantity' => 'required',
        'description' => 'required',
    ]);

    return products::create([
        'product_name' => request('product_name'),
        'quantity' => request('quantity'),
        'description' => request('description'),
    ]);
});