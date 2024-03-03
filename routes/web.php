<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Models\Student;
use Illuminate\Http\Request;

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

// Route::get('/', function () {
//     return redirect('/dashboard');
// })->middleware('auth');

Route::get('/', [App\Http\Controllers\WebsiteController::class, 'index']);
Route::get('/courses', [App\Http\Controllers\WebsiteController::class, 'courses']);
Route::get('/contact', [App\Http\Controllers\WebsiteController::class, 'contact']);
Route::get('/about', [App\Http\Controllers\WebsiteController::class, 'about']);
Route::get('/gallery', [App\Http\Controllers\WebsiteController::class, 'gallery']);
Route::get('/courses-beginner', [App\Http\Controllers\WebsiteController::class, 'coursesBeginner']);
Route::get('/courses-intermediate', [App\Http\Controllers\WebsiteController::class, 'coursesIntermediate']);
Route::get('/courses-advanced', [App\Http\Controllers\WebsiteController::class, 'coursesAdvanced']);

Route::get('/student-register', [App\Http\Controllers\WebsiteController::class, 'showStudentRegistrationForm']);
Route::post('/student-register', [App\Http\Controllers\StudentController::class, 'registerStudent']);
Route::get('/student-enroll', [App\Http\Controllers\EnrollmentController::class, 'showEnrollmentForm']);
Route::post('/student-enroll', [App\Http\Controllers\EnrollmentController::class, 'enrollStudent']);
Route::get('/course-upcoming-sessions', [App\Http\Controllers\AcademicSessionController::class, 'courseUpcomingSessions']);
Route::post('/add-course-to-session', [App\Http\Controllers\AcademicSessionController::class, 'addCourseToSession']);
Route::get('/registration-payment', [App\Http\Controllers\WebsiteController::class, 'showRegistrationPaymentPage']);
Route::post('/update-enrollment-payment/{enrollment_id}', [App\Http\Controllers\EnrollmentController::class, 'updateEnrollmentPaymentStatus']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware('auth');

Route::get('/tables', function () {
    return view('tables');
})->name('tables')->middleware('auth');

Route::get('/wallet', function () {
    return view('wallet');
})->name('wallet')->middleware('auth');

Route::get('/RTL', function () {
    return view('RTL');
})->name('RTL')->middleware('auth');

Route::get('/profile', function () {
    return view('account-pages.profile');
})->name('profile')->middleware('auth');

Route::get('/signin', function () {
    return view('account-pages.signin');
})->name('signin');

Route::get('/signup', function () {
    return view('account-pages.signup');
})->name('signup')->middleware('guest');

Route::get('/sign-up', [RegisterController::class, 'create'])
    ->middleware('guest')
    ->name('sign-up');

Route::post('/sign-up', [RegisterController::class, 'store'])
    ->middleware('guest');

Route::get('/sign-in', [LoginController::class, 'create'])
    ->middleware('guest')
    ->name('sign-in');

Route::post('/sign-in', [LoginController::class, 'store'])
    ->middleware('guest');

Route::post('/logout', [LoginController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

Route::get('/forgot-password', [ForgotPasswordController::class, 'create'])
    ->middleware('guest')
    ->name('password.request');

Route::post('/forgot-password', [ForgotPasswordController::class, 'store'])
    ->middleware('guest')
    ->name('password.email');

Route::get('/reset-password/{token}', [ResetPasswordController::class, 'create'])
    ->middleware('guest')
    ->name('password.reset');

Route::post('/reset-password', [ResetPasswordController::class, 'store'])
    ->middleware('guest');

Route::get('/user-profile', [ProfileController::class, 'index'])->name('users.profile')->middleware('auth');
Route::put('/laravel-examples/user-profile/update', [ProfileController::class, 'update'])->name('users.update')->middleware('auth');
Route::get('/users-management', [UserController::class, 'index'])->name('users-management')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
    Route::get('icons', ['as' => 'pages.icons', 'uses' => 'App\Http\Controllers\PageController@icons']);
});

Route::group(['middleware' => 'auth'], function () {
    Route::resource('students', 'App\Http\Controllers\StudentController');
	Route::resource('student-payments', 'App\Http\Controllers\StudentPaymentController');
    Route::resource('enrollments', 'App\Http\Controllers\EnrollmentController');
    Route::resource('courses-admin', 'App\Http\Controllers\CourseController');
    Route::resource('academic-sessions', 'App\Http\Controllers\AcademicSessionController');
});

Route::get('/student-details', function (Request $request) {
    return Student::find($request->student_id);
})->middleware('auth');
    