<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/agent', [PageController::class, 'agent'])->name('agent');
Route::get('/agent/{tema?}', [PageController::class, 'agent'])->name('agent.idea');
Route::get('/project-idea', fn () => view('about'))->name('project.idea');
Route::get('/hitung', fn () => view('hitung'))->name('hitung');
Route::get('/hitung/{ip1}/{ip2}', [App\Http\Controllers\CalculatorController::class, 'hitungIpk'])->where([
    'ip1' => '[0-9]+(?:\.[0-9]+)?',
    'ip2' => '[0-9]+(?:\.[0-9]+)?',
]);
Route::get('/hitung-ipk/{ip1}/{ip2}', [App\Http\Controllers\CalculatorController::class, 'hitungIpk'])->where([
    'ip1' => '[0-9]+(?:\.[0-9]+)?',
    'ip2' => '[0-9]+(?:\.[0-9]+)?',
]);

Route::prefix('dashboard')->name('dashboard.')->group(function(){
    Route::get('/about', [PageController::class, 'about'])->name('about');
    Route::get('/mahasiswa/{nrp}', [PageController::class, 'mahasiswaDetail'])
        ->where('nrp', '[0-9]{10}') // regex
        ->name('mahasiswa.detail');
});

Route::fallback(function () {
    return view('errors.404');
});

