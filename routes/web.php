<?php

use App\Http\Controllers\ScheduleController;
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

Route::get('/', [ScheduleController::class, 'list'])->name('schedule.list');
Route::get('/create', [ScheduleController::class, 'create'])->name('schedule.create');
Route::get('/edit/{id}', [ScheduleController::class, 'edit'])->name('schedule.edit');
Route::get('/view/{id}', [ScheduleController::class, 'view'])->name('schedule.view');

Route::post('/save', [ScheduleController::class, 'save'])->name('schedule.save');
Route::delete('/delete/{id}', [ScheduleController::class, 'delete'])->name('schedule.delete');
