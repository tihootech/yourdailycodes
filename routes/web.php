<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $settings = \App\Models\Setting::first();
    $settings = json_decode($settings->values);
    return view('welcome', compact('settings'));
});

Route::redirect('downloads', '/');
Route::redirect('download', '/');
