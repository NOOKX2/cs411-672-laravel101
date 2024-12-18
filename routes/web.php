<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('about.index'); // เปลี่ยนชื่อ route ตามที่นิสิตกำหนด
});

Route::get('/hello/{name}', function ($name) {
    return "Hello {$name}";
})->name("hello.name");

use App\Http\Controllers\AboutController;

Route::get('/about', [AboutController::class, 'index'])
    ->name('about.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

use App\Http\Controllers\SongController;

Route::get('/songs', [SongController::class, 'index'])
    ->name('songs.index');

require __DIR__.'/auth.php';
