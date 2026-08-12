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
use App\Http\Controllers\NewsController;
use App\Http\Controllers\DownloadsController;
use App\Http\Controllers\EventsController;

use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\UploadsController;
use App\Http\Controllers\WebController;


// Route::get('/', function () {
//     return view('welcome');
// });

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

Route::get('/events', [EventsController::class, 'index'])->name('events.index');

Route::post('/events', [EventsController::class, 'store'])->name('events.store');

Route::get('/events/{id}/edit', [EventsController::class, 'edit'])->name('events.edit');

Route::put('/events/{id}', [EventsController::class, 'update'])->name('events.update');




Route::get('/admission', [AdmissionController::class, 'index'])->name('admission.index');

Route::post('/admission', [AdmissionController::class, 'store'])->name('admission.store');

Route::get('/admission/{id}/edit', [AdmissionController::class, 'edit'])->name('admission.edit');

Route::put('/admission/{id}', [AdmissionController::class, 'update'])->name('admission.update');




Route::get('/news', [NewsController::class, 'index'])
    ->name('news');
Route::post('/createnews', [NewsController::class, 'store'])
    ->name('createnews');
Route::post('/updatenews', [NewsController::class, 'update'])
    ->name('updatenews');


Route::get('/upload-list', [UploadsController::class, 'index'])
    ->name('uploads');

Route::post('/createuploads', [UploadsController::class, 'store'])
    ->name('createuploads');

    Route::post('/updateuploads', [UploadsController::class, 'update'])
    ->name('updateuploads');

Route::post('/updateaboutus', [AboutusController::class, 'update'])
    ->name('updateaboutus');





Route::get('/', [WebController::class, 'index'])->name('uploads');
Route::get('/index', [WebController::class, 'index'])->name('uploads');
Route::get('/aboutus_index', [WebController::class, 'aboutus'])->name('aboutus_index');
Route::get('/programs', [WebController::class, 'programs'])->name('programs');
Route::get('/admission_index', [WebController::class, 'admission'])->name('admission_index');
Route::get('/faculty', [WebController::class, 'faculty'])->name('faculty');
Route::get('/studentlife', [WebController::class, 'studentlife'])->name('studentlife');
Route::get('/news_index', [WebController::class, 'news'])->name('news');
Route::get('/gallery', [WebController::class, 'gallary'])->name('gallary');
Route::get('/contact', [WebController::class, 'contact'])->name('contact');
Route::post('/application/store', [WebController::class, 'store'])
    ->name('application.store');


require __DIR__.'/auth.php';
