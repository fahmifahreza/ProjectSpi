<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('LandingPages'); // otomatis mencari resources/views/landing.blade.php
});
