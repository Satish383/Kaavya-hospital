<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Frontend.index');
});

Route::get('/clinic', function () {
    return view('Frontend.clinic');
});

Route::get('/about', function () {
    return view('Frontend.about');
});

Route::get('/knee', function () {
    return view('Frontend.knee');
});

Route::get('/hip', function() {
    return view('Frontend.hip');
});

Route::get('/fracture', function() {
    return view('Frontend.fracture');
});

Route::get('/shoulder', function() {
    return view('Frontend.shoulder');
});

Route::get('/orthoscopy', function() {
    return view('Frontend.orthoscopy');
});

Route::get('/redo', function() {
    return view('Frontend.redo');
});

Route::get('/knee-condition', function() {
    return view('Frontend.knee-condition');
});

Route::get('/hip-condition', function() {
    return view('Frontend.hip-condition');
});

Route::get('/total-knee', function() {
    return view('Frontend.total-knee');
});

Route::get('/total-hip', function() {
    return view('Frontend.total-hip');
});

Route::get('/hip-fracture', function() {
    return view('Frontend.hip-fracture');
});

Route::get('/Orthopedic', function() {
    return view('Frontend.Orthopedic');
});

Route::get('/arthoscopy', function() {
    return view('Frontend.arthoscopy');
});

Route::get('/bone-joint', function() {
    return view('Frontend.bone-joint');
});

Route::get('/trauma', function() {
    return view('Frontend.trauma');
});

Route::get('/shoulder-elbow', function() {
    return view('Frontend.shoulder-elbow');
});

Route::get('/patient', function() {
    return view('Frontend.patient');
});

Route::get('/appointment', function() {
    return view('Frontend.appointment');
});


Route::get('/gallery', function() {
    return view('Frontend.gallery');
});

Route::get('/contact', function() {
    return view('Frontend.contact');
});