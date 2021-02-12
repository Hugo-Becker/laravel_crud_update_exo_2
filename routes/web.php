<?php

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

use App\Http\Controllers\MembreController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MembreController::class,'index']);
Route::get('/addMember', [MembreController::class,'add']);
Route::get('/showMember/{id}', [MembreController::class,'show']);
Route::get('/edit-member/{id}', [MembreController::class,'edit']);




Route::post('/store-member', [MembreController::class,'store']);
Route::post('/delete-member/{id}', [MembreController::class,'delete']);
Route::post('/update-member/{id}', [MembreController::class,'update']);


// Route::post('/store-member', [MembreController:class,'store']);
