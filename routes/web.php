<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BudgetController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/sobre', [AboutController::class, 'index'])->name('about');
Route::get('/contato', [ContactController::class, 'index'])->name('contact');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{blog}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/orçamento', [BudgetController::class, 'index'])->name('budget');

Route::post('/send/budget', [BudgetController::class, 'send'])->name('budget.send');
Route::post('/send/contact', [HomeController::class, 'sendEmail'])->name('home.send');