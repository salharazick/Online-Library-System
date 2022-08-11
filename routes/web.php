<?php

use App\Http\Controllers\booksController;
use App\Http\Controllers\userController;
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
Route::get('login', function () {
    return view('login');
});

Route::get('logout', function () {
    session()->forget('user');
    return view('login');
});


Route::view('register','register');
Route::view('home','home');
Route::post('login',[userController::class,'login']);
Route::post('register',[userController::class,'register']);
Route::get('home',[booksController::class,'home']);
Route::get('genre',[booksController::class,'genre']);
Route::get('booklist',[booksController::class,'booklist']);
Route::get('detail/{id}',[booksController::class,'detail']);
Route::get('genre/{id}',[booksController::class,'bookByGenre']);
Route::get('genre/detail/{id}',[booksController::class,'detail']);
Route::post('add_to_shelf',[booksController::class,'addToShelf'])->name('addtoshelf');
Route::get('search',[booksController::class,'search'])->name('search');
Route::get('shelflist',[booksController::class,'shelflist']);
Route::get('removeshelf/{id}',[booksController::class,'removeshelf']);
Route::get('borrow',[booksController::class,'borrow']);
Route::post('borrowplace',[booksController::class,'borrowplace']);
Route::get('myborrowals',[booksController::class,'myborrowals']);
Route::get('return/{id}',[booksController::class,'returnBorrowal']);

