<?php

use Illuminate\Support\Facades\Route;

Route::middleware('web')->group(function (){
    Route::post('/owner/{tenent}/developer-gate', [TomatoPHP\FilamentDeveloperGate\Http\Controllers\DeveloperGateController::class, 'login'])->name('developer-gate.login.tenent');
    Route::post('/owner/developer-gate', [TomatoPHP\FilamentDeveloperGate\Http\Controllers\DeveloperGateController::class, 'login'])->name('developer-gate.login');
});
