<?php

use App\Http\Controllers\NoteController;
use App\Http\Controllers\WelcomeConroller;
use Illuminate\Support\Facades\Route;

// Route::get('/',[WelcomeConroller::class,'welcome'])->name('welcome');

// // show all notes  note
// Route::get('/note',[NoteController::class,'index'])->name('note.index');

// // create note
// Route::get('/note/create',[NoteController::class,'create'])->name('note.create');

// // store notes
// Route::post('/note',[NoteController::class,'store'])->name('note.store');


// // show edit form for notes
// Route::get('/note/{id}/edit',[NoteController::class,'edit'])->name('note.edit');

// // update the note
// Route::put('/note/{id}',[NoteController::class,'update'])->name('note.update');

// // delete the note
// Route::delete('/note/{id}',[NoteController::class,'destroy'])->name('note.destroy');

// // show individual note
// Route::get('/note/{id}',[NoteController::class,'show'])->name('note.show');



// all seven in a single line
Route::resource('note', NoteController::class);