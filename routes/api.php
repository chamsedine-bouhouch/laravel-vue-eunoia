<?php

use App\Http\Controllers\Auth\LoginController;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', [LoginController::class, 'login'])->name('login');
Route::post('logout', [LoginController::class, 'logout'])->middleware('auth:sanctum');

// Route::get('user', 'UserController@index')->name('user');
// Route::get('/users/{user}/subjects', function (User $user) {
//     return $user->subjects();
// })->scopeBindings();

Route::middleware('auth:sanctum')->get('/user/subjects', function (Request $request) {
   return $request->user()->subjects;
    // return User::find($request->user()->id)->with('subjects')->get();
});