<?php

use Illuminate\Support\Facades\Route;

// Route ke halaman home
Route::get('/', function () {
    return view('home1');
})->name('home1');

// Route ke halaman commodity
Route::get('/commodity', function () {
    return view('commodity');
})->name('commodity');

Route::get('/regulation', function () {
    return view('regulation');
})->name('regulation');

Route::get('/signup', function () {
    return view('signup');
})->name('signup');

Route::get('/regulation/filipina', function () {
    return view('filipina');
})->name('filipina');

Route::get('/regulation/thailand', function () {
    return view('thailand');
})->name('thailand');

Route::get('/regulation/vietnam', function () {
    return view('vietnam');
})->name('vietnam');

Route::get('/regulation/myanmar', function () {
    return view('myanmar');
})->name('myanmar');

Route::get('/regulation/singapura', function () {
    return view('singapura');
})->name('singapura');

Route::get('/regulation/malaysia', function () {
    return view('malaysia');
})->name('malaysia');

Route::get('/regulation/laos', function () {
    return view('laos');
})->name('laos');

Route::get('/regulation/kamboja', function () {
    return view('kamboja');
})->name('kamboja');

Route::get('/regulation/brunei', function () {
    return view('brunei');
})->name('brunei');

Route::get('/regulation/timorleste', function () {
    return view('timorleste');
})->name('timorleste');




