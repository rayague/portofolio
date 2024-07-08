<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewsController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/services', [ViewsController::class, 'servicesView'])->name('servicesView');
Route::get('/about', [ViewsController::class, 'aboutView'])->name('aboutView');
Route::get('/contact', [ViewsController::class, 'contactView'])->name('contactView');
Route::get('/blog', [ViewsController::class, 'blogView'])->name('blogView');
Route::get('/single', [ViewsController::class, 'singleView'])->name('singleView');
Route::get('/administration', function () {
    return view('admin/index');
})
// ->middleware(['auth', 'verified'])
->name('dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';