<?php

use App\Models\Course;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/directory', function () {
    $staff = [
        [
            'name' => 'Dr. Otis Osbourne',
            'title' => 'Head of Department / Senior Lecturer',
            'email' => 'oosbourne@faculty.ucc.edu.jm',
            'phone' => '+18769063000',
            'photo' => asset('images/otis.jpg')
        ],
        [
            'name' => 'Sherida Levy',
            'title' => 'Programme Coordinator',
            'email' => 'itprogcoordinator@ucc.edu.jm',
            'phone' => '+18762361895',
            'photo' => asset('images/sherida.jpg')
        ],
        [
            'name' => 'Oniel Dowe',
            'title' => 'Admissions Manager',
            'email' => 'registry@uccglobal.co',
            'phone' => '+18769063000',
            'photo' => asset('images/oniel.jpg')
        ]
    ];
    return view('directory', compact('staff'));
})->name('directory');

Route::get('/courses', function () {
    $courses = Course::all();
    return view('courses', compact('courses'));
})->name('courses');

Route::get('/admissions', function () {
    return view('admissions');
})->name('admissions');

Route::get('/social-media', function () {
    return view('social');
})->name('social');