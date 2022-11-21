<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorDashboard;
use App\Http\Controllers\PatientDashboard;
use App\Http\Controllers\UsersController;
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

// Doctor dashboard
Route::get('/dashboard', [DoctorDashboard::class, 'doctorDashboard']);
Route::get('/tables', [DoctorDashboard::class, 'patientsList']);
Route::get('patient-chart', [DoctorDashboard::class, 'patientChart']);
Route::get('/consultation-schedule', [DoctorDashboard::class, 'consultationSched']);


// Patient dashboard
Route::get('/patient-dashboard', [PatientDashboard::class, 'appointmentToday']);
Route::get('/patient-newappointment', [PatientDashboard::class, 'newAppointment']);

// doctor register and login
Route::post('/register', [UsersController::class, 'registerAsDoctor']);
Route::post('/login', [UsersController::class, 'login']);
// patient register and login
Route::post('/register', [UsersController::class, 'registerAsPatient']);
Route::post('/login', [UsersController::class, 'login']);

Route::get('/register', [UsersController::class, 'showRegister']);


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

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/forgot-password', function () {
    return view('forgot-password');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/team', function () {
    return view('team');
});