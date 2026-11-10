<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
})->name('home');



Route::controller(PageController::class)->group(function () {
    Route::get('/about-us', 'about')->name('about-us');
    Route::get('/services', 'services')->name('services');
    Route::get('/contact-us', 'contact')->name('contact-us');
});

Route::post('/contact/send', [ContactController::class, 'sendMessage'])
    ->name('contact.send')
    ->middleware('throttle:5,1');