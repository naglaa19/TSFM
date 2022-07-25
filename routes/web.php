<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\imageController;
use App\Http\Controllers\galleryController;

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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('welcome');
});
// Route::get('image', function () {
//     return view('image');});


//=======
//======================================================================
//==========================  Image   ==================================
//======================================================================
Route::get('create','App\Http\Controllers\imageController@create')->name('Create');
Route::post('storeImage','App\Http\Controllers\imageController@store')->name('storeImage');
Route::get('edit/{id}', [imageController::class, 'edit']);
Route::post('updateImage/{id}', [imageController::class, 'update'])->name('updateImage');
Route::get('DeleteImage/{id}','App\Http\Controllers\imageController@destroy')->name('DeleteImage');

Route::get('imageDashboard','App\Http\Controllers\imageController@index')->name('imageDashboard');

//======================================================================
//==========================  category   ==================================
//======================================================================

Route::get('createCat','App\Http\Controllers\galleryController@create')->name('createCat');
Route::get('editCat/{id}','App\Http\Controllers\galleryController@edit')->name('editCat');
Route::post('storecat','App\Http\Controllers\galleryController@store')->name('storecat');
Route::post('updatecat/{id}','App\Http\Controllers\galleryController@update')->name('updatecat');
Route::get('DeleteCat/{id}','App\Http\Controllers\galleryController@destroy')->name('DeleteCat');

Route::get('showCatImage/{id}','App\Http\Controllers\galleryController@show')->name('showCatImage');
Route::get('GalleryDashboard','App\Http\Controllers\galleryController@index')->name('GalleryDashboard');





















// Auth
Auth::routes();

