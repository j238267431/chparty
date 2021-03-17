<?php

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

Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('/');

Auth::routes();
Route::get('/message', [\App\Http\Controllers\MessageController::class, 'index'])->name('message');
Route::get('/message/send',[\App\Http\Controllers\MessageController::class, 'send']);


Route::get('products', [\App\Http\Controllers\IndexController::class,'allProducts'])->name('products');
Route::get('products/{category}', [\App\Http\Controllers\IndexController::class,'showProductsByCategory'])
    ->name('products.show');

Route::middleware('auth')->group(function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/proposal', [\App\Http\Controllers\ProposalController::class, 'index'])->name('proposal');
    Route::post('/proposal/store', [\App\Http\Controllers\ProposalController::class, 'store'])
        ->name('proposal.store');
    Route::post('image/store', [\App\Http\Controllers\ProposalController::class, 'imageStore'])->name('image.store');

});

Route::group(['prefix' => 'messages'], function () {
//    Route::get('/', ['as' => 'messages', 'uses' => 'MessagesController@index']);
    Route::get('/', [\App\Http\Controllers\MessagesController::class, 'index'])->name('messages');
//    Route::get('create', ['as' => 'messages.create', 'uses' => 'MessagesController@create']);
    Route::get('/create', [\App\Http\Controllers\MessagesController::class, 'create'])->name('messages.create');
//    Route::post('/', ['as' => 'messages.store', 'uses' => 'MessagesController@store']);
    Route::post('/', [\App\Http\Controllers\MessagesController::class, 'store'])->name('messages.store');
//    Route::get('{id}', ['as' => 'messages.show', 'uses' => 'MessagesController@show']);
    Route::get('{id}', [\App\Http\Controllers\MessagesController::class, 'show'])->name('messages.show');
//    Route::put('{id}', ['as' => 'messages.update', 'uses' => 'MessagesController@update']);
    Route::put('{id}', [\App\Http\Controllers\MessagesController::class, 'update'])->name('messages.update');

});
