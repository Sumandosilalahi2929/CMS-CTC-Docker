<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

// Redirect the root URL to the contacts index page
Route::get('/', function () {
    return redirect()->route('contacts.index');
});


Route::resource('contacts', ContactController::class);
