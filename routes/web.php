<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/', function () {
    return Inertia::render('Home');
});

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

Route::get('/home', function () {
    return Inertia::render('Home');
})->name('home');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/test', function () {
    return Inertia::render('Test');
})->name('test');

#Route::middleware('auth')->group(function () {
 #   Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
  #  Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
   # Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
#});

Route::get('/settings', function () {
    return Inertia::render('Settings');
})->name('settings');


Route::get('/profile', function () {
    return Inertia::render('Profile');
})->name('profile');

Route::get('/company-profile', function () {
    return Inertia::render('Company-Profile');
})->name('company-profile');

Route::get('/company-settings', function () {
    return Inertia::render('Company-Settings');
})->name('company-Settings');

Route::get('/about-us', function () {
    return Inertia::render('AboutUs');
});

Route::get('/contact-us', function () {
    return Inertia::render('ContactUs');
});

Route::get('/faq', function () {
    return Inertia::render('FAQ');
});

Route::get('/help', function () {
    return Inertia::render('Help');
});

Route::get('/privacy', function () {
    return Inertia::render('Privacy');
});

Route::get('/terms', function () {
    return Inertia::render('TermsAndConditions');
});

Route::get('/about-us', function () {
    return Inertia::render('AboutUs');
});

Route::get('/contact-us', function () {
    return Inertia::render('ContactUs');
});

Route::get('/faq', function () {
    return Inertia::render('FAQ');
});

Route::get('/help', function () {
    return Inertia::render('Help');
});

Route::get('/privacy', function () {
    return Inertia::render('Privacy');
});

Route::get('/terms', function () {
    return Inertia::render('TermsAndConditions');
});

require __DIR__.'/auth.php';