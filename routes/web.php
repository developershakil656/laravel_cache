<?php

use App\Events\PostUpdate;
use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Cache;
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

Route::get('/',[PostController::class, 'index']);

Route::get('/update/{id}',[PostController::class, 'update']);
Route::get('/create',[PostController::class, 'create']);
Route::get('/delete/{id}',[PostController::class, 'delete']);


Route::get('/clear-cache',function(){
    Cache::flush();
    return redirect()->back();
});


