<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::group([
	'prefix' => 'v1',
	'as' => 'v1.'
], function () {
	// 利用者
	Route::group([
		'prefix' => 'users',
		'as' => 'users.'
	], function () {
		Route::get('{userId}', [UserController::class, 'show'])->name('show');
		Route::get('{userId}/articles', [UserController::class, 'show'])->name('showArticles');
	});
});
