<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\PostController;
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

Route::group(['prefix' => '/'], function () {
	Route::get('', function () {
		return view('welcome');
	});
	Route::get('home', function () {
		return view('home');
	})->name('home');

	Route::group(['prefix' => 'posts'], function () {
		Route::get('', [PostController::class, 'index'])->name('posts');
		Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
		Route::get('/authors', [AuthorController::class, 'index'])->name('authors');
		Route::get('{post:slug}', [PostController::class, 'show'])->name('post.show');
		Route::get('/categories/{category:slug}', [CategoryController::class, 'show'])->name('category.show');
		Route::get('/authors/{author:username}', [AuthorController::class, 'show'])->name('author.show');
	});

	Route::group(['prefix' => 'login'], function() {
		Route::get('', [AuthController::class, 'login'])->name('login')->middleware('guest');
		Route::post('', [AuthController::class, 'authenticate'])->name('authenticate');
	});

	Route::post('logout', [AuthController::class, 'logout'])->name('logout');

	Route::group(['prefix' => 'register'], function() {
		Route::get('', [AuthController::class, 'register'])->name('register')->middleware('guest');
		Route::post('', [AuthController::class, 'registration'])->name('registration');
	});

	Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function() {
		Route::get('', function() {
			return view('dashboard.index');
		})->name('dashboard');

		Route::resource('/posts', DashboardPostController::class);
	});
});



