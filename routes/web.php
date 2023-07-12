<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;


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

Route::get('/', [IndexController::class, 'index'])->name('home');//トップ画面表示
Route::post('/guestLogin', [IndexController::class, 'guestLogin']); //ゲストログイン
Route::get('/login', [IndexController::class, 'login']); //ログイン画面の表示
Route::post('/ajax', [IndexController::class, 'ajax']); //ログインのバリデーション
Route::get('/logout', [IndexController::class, 'logout']); //ログアウト

Route::get('/singup', [IndexController::class, 'singup']);//アカウント新規登録画面の表示
Route::post('/store', [IndexController::class, 'store']);//アカウント新規登録機能

Route::post('/list', [IndexController::class, 'list'])->name('list');//検索結果画面の表示
Route::get('/result', [IndexController::class, 'result'])->name('result'); //検索結果の詳細画面の表示
Route::post('/result', [IndexController::class, 'result'])->name('result'); //検索結果の詳細画面の表示

Route::get('/mypage', [IndexController::class, 'mypage'])->name('mypage'); //ユーザー画面の表示
Route::post('/edite', [IndexController::class, 'edite']);//アカウント編集機能
Route::post('/change', [IndexController::class, 'change']);//アイコン保存機能

Route::get('/article', [IndexController::class, 'article']); //動物一覧表示

Route::get('/commit', [IndexController::class, 'commit']); //コメント機能
Route::post('/delite', [IndexController::class, 'delite']); //コメント削除機能

Route::post('/addbookmarks', [IndexController::class, 'addbookmarks']); //ブックマーク追加機能
Route::post('/removeBookmarks', [IndexController::class, 'removeBookmarks']); //ブックマーク解除機能
