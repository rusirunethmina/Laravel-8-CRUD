<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostsController;

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

Route::get('/posts', [PostsController::class, 'index']);    //get data from datbase

Route::get('/posts/edit/{id}', [PostsController::class, 'edit']); //get data from dtaase and pass to the update from

Route::put('/posts/{post}', [PostsController::class, 'update']);   //update data

Route::get('/posts/create', [PostsController::class, 'create']);   //get from

Route::post('/posts', [PostsController::class, 'store']);   //create data

