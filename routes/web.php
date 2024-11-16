<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Livewire\Notes\ListNotes;
use App\Livewire\Tasks\ListTasks;

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/dashboard', DashboardController::class)->name('admin.dashboard');

Route::get('tasks', ListTasks::class)->name('tasks');
Route::get('notes', ListNotes::class)->name('notes');