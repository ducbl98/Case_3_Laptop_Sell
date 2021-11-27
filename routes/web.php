<?php

use App\Http\Controllers\LaptopController;
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
Route::get('laptops', [LaptopController::class, 'index'])->name('laptop.index');
Route::get('laptops/create',[LaptopController::class,'create'])->name('laptop.create');
Route::get('laptops/{id}', [LaptopController::class, 'show'])->name('laptop.show');


