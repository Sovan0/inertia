<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// Route::get('/', function () {
//     sleep(1);
//     return Inertia::render('Home', ['name' => 'Mike']);
// });

Route::get('/', [PostController::class, 'index']);

Route::resource('posts', PostController::class)->except('index');
