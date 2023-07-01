<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/main_page', [App\Http\Controllers\PagesController::class, 'main_page'])->name('main_page');


Route::get('/buildings_page', [App\Http\Controllers\PagesController::class, 'buildings_page'])->name('buildings_page');
Route::get('/buildings_table_page',[\App\Http\Controllers\PagesController::class,'buildings_table_page'])->name('buildings_table_page');



Route::get('/buildings_map', [App\Http\Controllers\PagesController::class, 'buildings_map'])->name('buildings_map');
Route::get('/building_details',[\App\Http\Controllers\PagesController::class,'building_details'])->name('building_details');
Route::get('/building_citizens',[\App\Http\Controllers\PagesController::class,'building_citizens'])->name('building_citizens');


Route::get('building' , [\App\Http\Controllers\BuildindingController::class, 'add_new_building'])->name('add_new_building');
Route::get('citizen' , [\App\Http\Controllers\BuildindingController::class, 'add_new_citizen'])->name('add_new_citizen');


//ajax
Route::get('/buildings/delete_one_building',[\App\Http\Controllers\BuildindingController::class,'delete_one_building'])->name('delete_one_building');
Route::get('/buildings/edit_one_building',[\App\Http\Controllers\BuildindingController::class,'edit_one_building'])->name('edit_one_building');

Route::get('/buildings/delete_one_building1',[\App\Http\Controllers\BuildindingController::class,'delete_one_building1'])->name('delete_one_building1');
Route::get('/buildings/edit_one_building1',[\App\Http\Controllers\BuildindingController::class,'edit_one_building1'])->name('edit_one_building1');
