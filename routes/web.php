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
Route::get('/terms-and-conditions', function () {
    return view('terms-and-conditions');
});
// Route::get('/quiz', function () {
//     return view('quiz');
// });


// Products---------------------------------------------------------------------------------------------------------

Route::prefix('products')->group(function () {
    Route::view('/coaching', 'products.coaching');
    Route::view('/courses', 'products.courses');
    Route::view('/app', 'products.app');
    Route::view('/webinars', 'products.webinars');
    Route::view('/seminars', 'products.seminars');
    Route::view('/workshops', 'products.workshops');
    Route::view('/training', 'products.training');
    Route::view('/offsites', 'products.offsites');
    Route::view('/retreats', 'products.retreats');
});


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
