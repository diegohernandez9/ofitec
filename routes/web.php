<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ServicesController;
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

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/proyectos', [ProjectsController::class,'index'])->name('projects.index');
Route::get('/servicios/{link}', [ServicesController::class,'show'])->name('services.show');
Route::get('/contacto', [ContactController::class,'index'])->name('contact.index');
Route::post('/contacto', [ContactController::class,'store'])->name('contact.store');
