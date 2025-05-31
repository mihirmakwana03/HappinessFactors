<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/home', function () {
    return view('home');
})->name('home');
Route::get('/products', function () {
    return view('products');
});
Route::get('/business', function () {
    return view('business');
})->name('business');

// Demo Request
use App\Http\Controllers\DemoRequestController;
Route::post('/request-demo', [DemoRequestController::class, 'requestDemo'])->name('request.demo');

Route::get('/terms-and-conditions', function () {
    return view('terms-and-conditions');
});
Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});
// Route::get('/quiz', function () {
//     return view('quiz');
// });


// Products---------------------------------------------------------------------------------------------------------

    Route::view('products/trainings', 'products.trainings');
    Route::view('products/courses', 'products.courses');
    Route::view('products/coaching', 'products.coaching');
    Route::view('products/webinars', 'products.webinars');
    Route::view('products/seminars', 'products.seminars');
    Route::view('products/workshops', 'products.workshops');
    Route::view('products/offsites', 'products.offsites');
    Route::view('products/retreats', 'products.retreats');
    Route::view('products/packages', 'products.packages');


//-----Controllers--------------------------------------------------------------------------------------------------


//Subscribe
use App\Http\Controllers\SubscriptionController;

Route::post('/subscribe', [SubscriptionController::class, 'subscribe'])->name('subscribe');

//Contact Us
use App\Http\Controllers\ContactController;

Route::post('/contact/send', [ContactController::class, 'send'])
    ->name('contact.send');


//Download Quiz
use App\Http\Controllers\QuizController;

Route::get('/quiz', [QuizController::class, 'downloadQuizPdf'])->name('quiz');
