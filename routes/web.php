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



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/AboutUs', [App\Http\Controllers\HomeControllerAboutUs::class, 'index'])->name('AboutUs');
Route::get('/OurTeam', [App\Http\Controllers\HomeControllerOurTeam::class, 'index'])->name('OurTeam');
Route::get('/OurPractices', [App\Http\Controllers\HomeControllerOurPractices::class, 'index'])->name('OurPractices');
Route::get('/ImmigrationLaw', [App\Http\Controllers\HomeControllerImmigrationLaw::class, 'index'])->name('ImmigrationLaw');
Route::get('/ProcessImprovement', [App\Http\Controllers\HomeControllerProcessImprovement::class, 'index'])->name('ProcessImprovement');
Route::get('/servicios', [App\Http\Controllers\Servicios\ServiciosController::class, 'index'])->name('servicios.index');
Route::get('/servicios/create', [App\Http\Controllers\Servicios\ServiciosController::class, 'create'])->name('servicios.create');
Route::get('/servicios/edit/{id}', [App\Http\Controllers\Servicios\ServiciosController::class, 'edit'])->name('servicios.edit');
Route::post('/servicios/store', [App\Http\Controllers\Servicios\ServiciosController::class, 'store'])->name('servicios.store');
Route::post('/servicios/update', [App\Http\Controllers\Servicios\ServiciosController::class, 'update'])->name('servicios.update');
Route::get('/servicios/get', [App\Http\Controllers\Servicios\ServiciosController::class, 'getDetalle'])->name('get.detalle');
Route::get('/servicios/destroy/{id}', [App\Http\Controllers\Servicios\ServiciosController::class, 'destroy'])->name('servicios.destroy');
Route::get('/lenguaje/show/{lenguaje}', [App\Http\Controllers\Lenguaje\LenguajeController::class, 'show'])->name('lenguaje.show');
Route::get('/ContactUs', [App\Http\Controllers\HomeControllerContactUs::class, 'index'])->name('ContactUs');
Route::post('/ContactUsPost', [App\Http\Controllers\Contactos\ContactosController::class, 'store'])->name('ContactUsPost');

    
