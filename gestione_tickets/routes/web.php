<?php

use App\Http\Controllers\HomePage;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketsController;

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

Route::get('/',[HomePage::class,'homePage'])->name('home');

Route::get('/tickets',[TicketsController::class,'index'])->name('tickets.index');

Route::get('/tickets/{id}',[TicketsController::class,'show'])->name('ticket.show');

Route::post('/tickets/send',[TicketsController::class,'send'])->name('send.email');