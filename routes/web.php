<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemoController;
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
//一覧画面を表示
Route::get('/',[MemoController::class,'showList'])->name('memos');

//登録画面を表示
Route::get('/memo/create',[MemoController::class,'showCreate'])->name('create');

//メモ登録
Route::post('/memo/store',[MemoController::class,'exeStore'])->name('store');


//詳細画面を表示
Route::get('/memo/{id}',[MemoController::class,'showDetail'])->name('show');
