<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';







Route::get('/', function(){
    return view('pages.index');
})->name('home');

Route::get('/about', function(){
    return view('pages.about');
})->name('about');

Route::get('/blog', function(){
    return view('pages.blog');
})->name('blog');

Route::get('/contact', function(){
    return view('pages.contact');
})->name('contact');


// I don't need this route
Route::get('/detail', function(){
    return view('pages.detail');
});

Route::get('/price', function(){
    return view('pages.price');
})->name('price');

Route::get('/quote', function(){
    return view('pages.quote');
})->name('quote');

Route::get('/services', function(){
    return view('pages.services');

})->name('services');

Route::get('/team', function(){
    return view('pages.team');
})->name('team');

Route::get('/testimonial', function(){
    return view('pages.testimonial');
})->name('testimonial');





