<?php

use App\Http\Controllers\AuthorsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;

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
Route::middleware('auth:sanctum') -> prefix('v1')->group(function(){
    Route::get('/user', function(Request $request){
        return $request ->user();
    });
    Route::get('/authors/{author}', [AuthorsController::class,
     'show']);
    Route::get('/authors', [AuthorsController::class,
    'index']);
    //  Route::apiResource('levels', )
    // Route::get('/logout', [UserController::class, 'logout']);
    // Route::post('/register', [UserController::class, 'register']);
    Route::apiResource('/authors', AuthorsController::class);
    Route::apiResource('/books', BooksController::class);
});

Route::middleware('auth:api')-> prefix('auth')->group( function () {
    Route::post('login', 'AuthController@login');
    Route::post('register', 'AuthController@register');
});

Route::get('/test', function(Request $request){
    return 'Authenticated';
});

