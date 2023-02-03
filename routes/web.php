<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostDashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserDashboardController;
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
Route::get('/createpost', function () {
    return view('createpost');
})->middleware('isAdmin');
Route::get('/about', function () {
    return view('about');
});


Route::get('/posts', [PostController::class, 'index'])->middleware('auth');
Route::get('/posts/{id}', [PostController::class, 'show'])->middleware('auth');

Route::post('/createpost', [PostController::class, 'store'])->middleware('isAdmin');
Route::post('/createcomment', [CommentController::class, 'store'])->middleware('auth');

Route::get('signup', [AuthController::class, 'getSignUp'])->middleware('logedIn');
Route::get('signin', [AuthController::class, 'getSignIn'])->middleware('logedIn');
Route::get('signout', [AuthController::class, 'signout'])->middleware('auth');

Route::post('/signup', [AuthController::class, 'signUp'])->middleware('logedIn');
Route::post('/signin', [AuthController::class, 'signin'])->middleware('logedIn');

Route::get('/profile', [ProfileController::class, 'index'])->middleware('auth');

Route::get('/post-dashboard', [PostDashboardController::class, 'index'])->middleware('isAdmin');
Route::get('delete/{id}', [PostDashboardController::class, 'delete'])->middleware('isAdmin');

Route::get('/user-dashboard', [UserDashboardController::class, 'index'])->middleware('isAdmin');






