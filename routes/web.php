<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/students',\App\Livewire\StudentList::class)->name('student.index');
    Route::get('/students/create',\App\Livewire\CreateStudent::class)->name('student.create');
    Route::get('/students/{student}/edit',\App\Livewire\EditStudent::class)->name('student.edit');
});

require __DIR__.'/auth.php';
