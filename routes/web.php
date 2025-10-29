<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\Public\HomeController::class, 'home'])->name('home');
Route::get('/about', [App\Http\Controllers\Public\AboutController::class, 'about'])->name('about');
Route::get('/participant', [App\Http\Controllers\Public\ParticipantController::class, 'participant'])->name('participant');
Route::get('/participant/{slug}', [App\Http\Controllers\Public\ParticipantController::class, 'participantDetail'])->name('participant.detail');
Route::get('/sponsor', [App\Http\Controllers\Public\SponsorController::class, 'sponsor'])->name('sponsor');
Route::get('/schedule', [App\Http\Controllers\Public\ScheduleController::class, 'schedule'])->name('schedule');
Route::get('/registration', [App\Http\Controllers\Public\RegistrationController::class, 'registration'])->name('registration');
Route::post('/registration', [App\Http\Controllers\Public\RegistrationController::class, 'registrationSubmit'])->name('registration.submit');
Route::get('/confirmation', [App\Http\Controllers\Public\RegistrationController::class, 'confirmation'])->name('confirmation');
