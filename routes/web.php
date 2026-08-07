<?php
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DepartmentController;

use App\Http\Controllers\DownloadsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::get('/logout', function (Request $request) {
    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/login');
})->name('logout');


 Route::get('/page', [HomeController::class, 'page'])->name('page.list');
 Route::get('/course', [CourseController::class, 'index'])->name('course.index');
 Route::post('/course', [CourseController::class, 'store'])->name('course.store');

 Route::get('/department', [DepartmentController::class, 'index'])->name('department.index');
 Route::post('/department', [DepartmentController::class, 'store'])->name('department.store');

Route::get('/department/edit/{id}', [DepartmentController::class, 'edit'])->name('department.edit');

Route::post('/department/update/{id}', [DepartmentController::class, 'update'])->name('department.update');





 
Route::get('/aboutus', [AboutusController::class, 'index'])
    ->name('aboutus');

Route::post('/createaboutus', [AboutusController::class, 'store'])
    ->name('createaboutus');

Route::post('/updateaboutus', [AboutusController::class, 'update'])
    ->name('updateaboutus');


Route::get('/downloads', [DownloadsController::class, 'index'])
    ->name('downloads');

Route::post('/createdownloads', [DownloadsController::class, 'store'])
    ->name('createdownloads');

Route::post('/updatedownloads', [DownloadsController::class, 'update'])
    ->name('updatedownloads');

require __DIR__.'/auth.php';
