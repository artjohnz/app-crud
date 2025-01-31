<?php
use App\Http\Controllers\ApplicantController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ApplicantController::class, 'index'])->name('applicants.index');
Route::get('/applicants/create', [ApplicantController::class, 'create'])->name('applicants.create');
Route::post('/applicants', [ApplicantController::class, 'store'])->name('applicants.store');
Route::get('/applicants/{id}/edit', [ApplicantController::class, 'edit'])->name('applicants.edit');
Route::put('/applicants/{id}', [ApplicantController::class, 'update'])->name('applicants.update');
Route::delete('/applicants/{id}', [ApplicantController::class, 'destroy'])->name('applicants.destroy');
