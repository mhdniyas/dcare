<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/categories', function () {
    return view('pages.categories');
});

Route::get('/marketplace', function () {
    return view('pages.marketplace');
});

Route::get('/product', function () {
    return view('pages.product');
});

Route::get('/about-us', function () {
    return view('pages.about');
});

Route::get('/contact-us', function () {
    return view('pages.contact');
});

Route::get('/hospital-products', function () {
    return view('categories.hospital');
});

Route::get('/clinic-products', function () {
    return view('categories.clinic');
});

Route::get('/dental-clinic-products', function () {
    return view('categories.dental');
});

Route::get('/quote', function () {
    return view('pages.quote');
});
