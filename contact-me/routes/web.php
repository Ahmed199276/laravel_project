<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return redirect()->route('contacts.index');
});

Route::resource('contacts', ContactController::class);
Route::get('/contacts/{contact}/edit', [ContactController::class, 'edit'])->name('contacts.edit');

