<?php

use Illuminate\Support\Facades\Route;

Route::domain(config('app.web_domain'))->group(function () {
    Route::get('/', function () {
        return view('frontend.index');
    });
    Route::get('/expat-profiling', function () {
        return view('frontend.expat-profiling');
    });
});

Route::domain(config('app.price_domain'))->group(function () {
    Route::get('/', function () {
        return view('frontend.expat-academy-price');
    });
    Route::get('/expat-profiling', function () {
        return view('frontend.expat-profiling-price');
    });
});

