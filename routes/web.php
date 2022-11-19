<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog-details', function () {
    return view('blog-details');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/consultation-schedule', function () {
    return view('consultation-schedule');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/forgot-password', function () {
    return view('forgot-password');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/patient-chart', function () {
    return view('patient-chart');
});

Route::get('/patient-dashboard', function () {
    return view('patient-dashboard');
});

Route::get('/patient-newappointment', function () {
    return view('patient-newappointment');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/tables', function () {
    return view('tables');
});

Route::get('/team', function () {
    return view('team');
});