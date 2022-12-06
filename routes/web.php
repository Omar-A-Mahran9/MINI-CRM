<?php

use App\Http\Controllers\CreateController;
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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard',[CreateController::class,'index'])->name('dashboard')->middleware('Check_User');
});

Route::get('Create/{var}',[CreateController::class,'Create']);

Route::post('Create',[CreateController::class,'store']);
Route::post('Createe',[CreateController::class,'storee']);

Route::delete('delete/{id}',[CreateController::class,'delete']);

Route::get('dashboard/{var}',[CreateController::class,'noacc']);
