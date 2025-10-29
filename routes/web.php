<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\Public\HomeController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\Public\AboutController::class, 'index'])->name('about');
Route::get('/participant', [App\Http\Controllers\Public\ParticipantController::class, 'index'])->name('participant');
Route::get('/participant/{slug}', [App\Http\Controllers\Public\ParticipantController::class, 'detail'])->name('participant.detail');
Route::get('/sponsor', [App\Http\Controllers\Public\SponsorController::class, 'index'])->name('sponsor');
Route::get('/schedule', [App\Http\Controllers\Public\ScheduleController::class, 'index'])->name('schedule');
Route::get('/registration', [App\Http\Controllers\Public\RegistrationController::class, 'index'])->name('registration');
Route::post('/registration', [App\Http\Controllers\Public\RegistrationController::class, 'submit'])->name('registration.submit');
Route::get('/confirmation', [App\Http\Controllers\Public\RegistrationController::class, 'confirmation'])->name('confirmation');
