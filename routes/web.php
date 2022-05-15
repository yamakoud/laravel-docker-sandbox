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

Route::get('/', function () {
    // laravel でディレクトリ構造を指定するときは
    // スラッシュがピリオドになる感じ。
    return view('hello.world');
    // return view('welcome');
});

// Route::get('/sandbox', );
use App\Http\Controllers\SandBoxController;
 
Route::get('/sandbox', [SandBoxController::class, 'index']);
Route::post('/sandbox', [SandBoxController::class, 'store']);