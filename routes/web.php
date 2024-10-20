<?php

use App\Http\Controllers\BranchController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard'); // ->middleware()->name('dashboard');

Route::prefix("dashboard")->group(function(){
    Route::resource("branches", BranchController::class);
    Route::resource("students", StudentController::class);
    Route::resource("teachers", TeacherController::class);
    Route::resource("groups", GroupController::class);
    Route::resource("courses", CourseController::class);
    Route::get("/payment-history", function(){
        return "payment page";
    })->name("payment-history");

    Route::get("/get-courses/{id}", [CourseController::class, "getCoursesByBranchId"]);

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
