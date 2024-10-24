<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    sleep(1);
    return Inertia::render('Home', ['name' => 'Mike']);
});

// Route::inertia('/', 'Home');
