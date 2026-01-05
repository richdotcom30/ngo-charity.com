<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/programs', function () {
    return view('programs');
});

Route::get('/volunteer', function () {
    return view('volunteer');
});

Route::get('/donate', function () {
    return view('donate');
});

Route::get('/admin/login', function () {
    return view('admin.login');
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/admin/volunteers', function () {
    return view('admin.volunteers');
});

Route::get('/admin/programs', function () {
    return view('admin.programs');
});

Route::get('/admin/blog', function () {
    return view('admin.blog');
});

Route::get('/admin/analytics', function () {
    return view('admin.analytics');
});

Route::get('/admin/settings', function () {
    return view('admin.settings');
});

Route::get('/admin/donations', function () {
    return view('admin.donations');
});
