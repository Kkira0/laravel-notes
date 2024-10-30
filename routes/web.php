<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/notes', [NoteController::class, 'index']);
Route::get('/notes/create', [NoteController::class, 'create']);
Route::get('/notes/{id}',[NoteController::class, 'show']);
Route::post('/notes', [NoteController::class, 'store']);
Route::get('/notes/{id}/edit', [NoteController::class, 'edit']);
Route::put('/notes/{id}/update', [NoteController::class, 'update']);
Route::delete('/notes/{id}/delete',[NoteController::class, 'delete']);