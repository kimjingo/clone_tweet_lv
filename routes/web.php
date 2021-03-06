<?php

// DB::listen(function ($query) {
//     var_dump($query->sql, $query->bindings);
// });

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

Route::middleware('auth')->group(function () {
    Route::get('/tweets', [App\Http\Controllers\TweetsController::class, 'index'])->name('home');
    Route::post('/tweets', [App\Http\Controllers\TweetsController::class, 'store']);

    Route::post('/profiles/{user}/follow', [App\Http\Controllers\FollowsController::class, 'store']);
});

Auth::routes();

//Route::get('/profiles/{user}', [App\Http\Controllers\ProfilesController::class, 'show'])->name('profile');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/profiles/{user:name}', [App\Http\Controllers\ProfilesController::class, 'show'])->name('profile');
// Route::get('/profiles/{user}', dd($user));
