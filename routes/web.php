<?php

use App\Livewire\Auth\AuthLogin;
use App\Livewire\Auth\AuthRegistration;
use App\Livewire\Director\DirectorDashboard;
use App\Livewire\Faculty\FacultyCompletedResearch;
use App\Livewire\Faculty\FacultyCreateProposal;
use App\Livewire\Faculty\FacultyMain;
use App\Livewire\Faculty\FacultyOngoingResearch;
use App\Livewire\Faculty\FacultyTrackProposal;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', AuthRegistration::class)->name('register');
Route::get('/login', AuthLogin::class)->name('login');


// DIRECTOR
Route::get('/director-dashboard', DirectorDashboard::class)->name('director-dashboard');

//FACULTY
Route::get('/faculty', FacultyMain::class)->name('faculty');
Route::get('/faculty/proposal/create', FacultyCreateProposal::class)->name('faculty-create-proposal');
Route::get('/faculty/proposal/track', FacultyTrackProposal::class)->name('faculty-track-proposal');
Route::get('/faculty/research/ongoing', FacultyOngoingResearch::class)->name('faculty-ongoing-research');
Route::get('/faculty/research/completed', FacultyCompletedResearch::class)->name('faculty-completed-research');
