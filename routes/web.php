<?php

use App\Http\Controllers\AdminController;
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

Route::get('/dashboard', function () {
    return view('admin.index');
});
require __DIR__.'/auth.php';

// Admin Controller start here

Route::get('admin/logout',[AdminController::class,'destroy'])->name('admin.logout');
Route::get('admin/profile',[AdminController::class,'profile'])->name('admin.profile');
Route::get('edit/profile/',[AdminController::class,'editprofile'])->name('edit.profile');
Route::post('store/profile/',[AdminController::class,'storeprofile'])->name('store.profile');


// Admin Controller end here
