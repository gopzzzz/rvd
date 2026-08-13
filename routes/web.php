<?php
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DepartmentController;


use App\Http\Controllers\DownloadsController;
use App\Http\Controllers\EventsController;

use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\UploadsController;
use App\Http\Controllers\SemesterDetailsController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\StudentLifeController;

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
 

 Route::get('/course', [CourseController::class, 'index'])
    ->name('course.index');

Route::post('/course', [CourseController::class, 'store'])
    ->name('course.store');

Route::get('/course/edit/{id}', [CourseController::class, 'edit'])
    ->name('course.edit');

Route::put('/course/update/{id}', [CourseController::class, 'update'])
    ->name('course.update');


 

Route::get('/department', [DepartmentController::class, 'index'])
    ->name('department.index');

Route::post('/department', [DepartmentController::class, 'store'])
    ->name('department.store');

Route::put('/department/{id}', [DepartmentController::class, 'update'])
    ->name('department.update');




 
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

Route::get('/contacts', [ContactsController::class, 'index'])
    ->name('contacts');

Route::post('/createcontacts', [ContactsController::class, 'store'])
    ->name('createcontacts');

Route::get('/faq', [FaqController::class, 'index'])
    ->name('faq');

Route::post('/createfaq', [FaqController::class, 'store'])
    ->name('createfaq');

Route::post('/updatefaq', [FaqController::class, 'update'])
    ->name('updatefaq');

Route::post('/deletefaq', [FaqController::class, 'delete'])
    ->name('deletefaq');
Route::post('/updateaboutus', [AboutusController::class, 'update'])
    ->name('updateaboutus');

Route::post('/updatecontacts', [ContactsController::class, 'updatecontacts']) ->name('updatecontacts');





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




Route::get(
    '/semester-details/{course_id}',
    [SemesterDetailsController::class, 'index']
)->name('semester.index');

Route::post(
    '/semester-details',
    [SemesterDetailsController::class, 'store']
)->name('semester.store');

Route::get(
    '/semester-details/edit/{id}',
    [SemesterDetailsController::class, 'edit']
)->name('semester.edit');

Route::put(
    '/semester-details/update/{id}',
    [SemesterDetailsController::class, 'update']
)->name('semester.update');

Route::delete(
    '/semester-details/delete/{id}',
    [SemesterDetailsController::class, 'destroy']
)->name('semester.delete');




Route::get('/student-life', [StudentLifeController::class, 'index'])
    ->name('student-life.index');

Route::post('/student-life', [StudentLifeController::class, 'store'])
    ->name('student-life.store');

Route::get('/student-life/{id}/edit', [StudentLifeController::class, 'edit'])
    ->name('student-life.edit');

Route::put('/student-life/{id}', [StudentLifeController::class, 'update'])
    ->name('student-life.update');

Route::delete('/student-life/{id}', [StudentLifeController::class, 'destroy'])
    ->name('student-life.destroy');















require __DIR__.'/auth.php';
